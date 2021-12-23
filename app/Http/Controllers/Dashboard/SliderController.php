<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Enumerations\CategoryType;
use App\Http\Requests\GeneralProductRequest;
use App\Http\Requests\MainCategoryRequest;
use App\Http\Requests\ProductImagesRequest;
use App\Http\Requests\ProductPriceValidation;
use App\Http\Requests\ProductStockRequest;
use App\Http\Requests\SliderImagesRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Tag;
use Illuminate\Http\Request;
use DB;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::select('id', 'photo', 'created_at', 'updated_at')
                    ->orderBy('id', 'DESC')
                    ->paginate(PAGINATION_COUNT);
        return view('dashboard.sliders.images.index', compact('sliders'));
    }

    public function addImages()
    {
        $images = Slider::get(['photo']);
        return view('dashboard.sliders.images.create', compact('images'));
    }

    //to save images to folder only
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
            // save dropzone images
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    Slider::create([
                        'photo' => $image,
                    ]);
                }
            }

            return redirect()->back()->with(['success' => 'Successfully Updated']);

        } catch (\Exception $ex) {

        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            //get specific categories and its translations
            $slider = Slider::orderBy('id', 'DESC')->find($id);

            if (!$slider)
                return redirect()->route('admin.sliders')
                                ->with(['error' => 'This Section Does Not Exist']);
            $slider->delete();

            DB::commit();
            return redirect()->route('admin.sliders')
                            ->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.sliders')
                            ->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

}
