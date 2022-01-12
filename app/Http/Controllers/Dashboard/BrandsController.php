<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Traits\PicTrait;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\MainCategoryRequest;
use App\Models\Brand;
use App\Models\Category;
use DB;
use Illuminate\Support\Str;


class BrandsController extends Controller
{
    use PicTrait;

    public function index()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.brands.index', compact('brands'));
    }

    public function create()
    {
        $brands = Brand::select('id')->get();
        return view('dashboard.brands.create', compact('brands'));
    }


    public function store(BrandRequest $request)
    {
        try {
            DB::beginTransaction();

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $file_name = $this->saveImage($request->photo , 'ashry/images/brands');

            $brand = Brand::create($request->except('_token', 'photo'));

            // save translations
            $brand->name = $request->name;
            $brand->photo = $file_name;
            $brand->save();

            DB::commit();
            return redirect()->route('admin.brands')->with(['success' => 'Added Successfully']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.brands')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function edit($id)
    {
        $brand = Brand::find($id);

        if (!$brand)
            return redirect()->route('admin.brands')->with(['error' => 'This Brand Does Not Exist']);

        return view('dashboard.brands.edit', compact('brand'));
    }


    public function update($id, BrandRequest $request)
    {
        try {

            $brand = Brand::find($id);

            if (!$brand)
                return redirect()->route('admin.brands')->with(['error' => 'This Brand Does Not Exist']);

            $image = Str::after($brand->photo, 'ashry/images/brands/');
            $image = base_path('ashry/images/brands/' . $image);
            unlink($image); //delete from folder

            DB::beginTransaction();

            if ($request->has('photo')) {
                $file_name = $this->saveImage($request->photo, 'ashry/images/brands');
                Brand::where('id', $id)->update(['photo' => $file_name]);
            }

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $brand->update($request->except('_token', 'id', 'photo'));

            //save translations
            $brand->name = $request->name;
            $brand->save();

            DB::commit();
            return redirect()->route('admin.brands')->with(['success' => 'Successfully Updated']);

        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('admin.brands')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $brand = Brand::find($id);

            if (!$brand)
                return redirect()->route('admin.brands')->with(['error' => 'This Brand Does Not Exist']);

            $image = Str::after($brand->photo, 'ashry/images/brands/');
            $image = base_path('ashry/images/brands/' . $image);
            unlink($image); //delete from folder

            $brand->delete();

            DB::commit();
            return redirect()->route('admin.brands')->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.brands')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }
}
