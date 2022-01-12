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
        try {
            DB::beginTransaction();

        if($request->hasFile("sliders")){
            $files=$request->file("sliders");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['photo'] = $imageName;
                $file->move(\base_path("/ashry/images/sliders"), $imageName);

                Slider::create($request->all());
            }
        }


        return redirect()->back()->with(['success' => 'Successfully Updated']);

        }catch(\Exception $ex){
            //return redirect()->back()->with(['error' => 'Something Wrong, Please Try Again']);
        }

    }

    public function delete($id)
    {
        try {

            $images = Slider::find($id);

            if (!$images)
                return redirect()->route('dashboard.sliders.images.create')->with(['error' => 'This Photo Does Not Exist']);

            $image = Str::after($images->photo, 'images/sliders/');
            $image = base_path('ashry/images/sliders/' . $image);
            unlink($image); //delete from folder

            $images->delete();

            return redirect()->back()->with(['success' => 'Successfully Deleted']);

        }catch(\Exception $ex){

            return redirect()->back()->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

}
