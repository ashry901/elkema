<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use DB;

class GalleryController extends Controller
{
    public function index()
    {
        return view('dashboard.gallery.index');
    }

    public function create()
    {
        return view('dashboard.gallery.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name= $filename.'-'.time().'.'.$extension;
        $image->move(public_path('images/gallery'),$file_name);

        $imageUpload = new Gallery;
        $imageUpload->original_filename = $fileInfo;
        $imageUpload->filename = $file_name;
        $imageUpload->save();
        return response()->json(['success'=>$file_name]);
    }

    public function getImages()
    {
        $images = Gallery::all()->toArray();
        foreach($images as $image){
            $tableImages[] = $image['filename'];
        }
        $storeFolder = public_path('images/gallery');
        $file_path = public_path('images/gallery/');
        $files = scandir($storeFolder);
        foreach ( $files as $file ) {
            if ($file !='.' && $file !='..' && in_array($file,$tableImages)) {
                $obj['name'] = $file;
                $file_path = public_path('images/gallery/').$file;
                $obj['size'] = filesize($file_path);
                $obj['path'] = url('public/images/gallery/'.$file);
                $data[] = $obj;
            }

        }
        //dd($data);
        return response()->json($data);
    }

    public function destroy(Request $request)
    {
        $filename =  $request->get('filename');
        Gallery::where('filename',$filename)->delete();
        $path = public_path('images/gallery/').$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return response()->json(['success'=>$filename]);
    }
}
