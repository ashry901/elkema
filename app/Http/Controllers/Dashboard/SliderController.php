<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderImagesRequest;
use Illuminate\Http\Request;
use App\Models\Slider;
use DB;
use Illuminate\Support\Str;

//use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function index()
    {
        $images = Slider::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.sliders.images.index', compact('images'));
    }

    public function addImages()
    {
        $images = Slider::get(['photo']);
        return view('dashboard.sliders.images.create', compact('images'));
    }

    public function saveSliderImages(Request $request)
    {
        $file = $request->file('dzfile');
        $filename = uploadImage('sliders', $file);

        return response()->json([
            'name' => $filename,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function saveSliderImagesDB(SliderImagesRequest $request)
    {
        try {
            //return $request;
            DB::beginTransaction();

            // save dropzone images
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    Slider::create([
                        // 'imageable_id' => $event->id, // if u have colmn
                        // 'imageable_type' => 'App\Models\Event',
                        'photo' => $image,
                    ]);
                }
            }
            DB::commit();
            return redirect()->back()->with(['success' => 'Successfully Updated']);

        }catch(\Exception $ex){
            DB::rollback();
            return redirect()->back()->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function delete($id)
    {
        try {

            $images = Slider::find($id);

            if (!$images)
                return redirect()->route('dashboard.sliders.images.create')->with(['error' => 'This Photo Does Not Exist']);

            $image = Str::after($images->photo, 'images/sliders/');
            $image = public_path('images/sliders/' . $image);
            unlink($image); //delete from folder

            $images->delete();

            return redirect()->back()->with(['success' => 'Successfully Deleted']);

        }catch(\Exception $ex){

            return redirect()->back()->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

}
