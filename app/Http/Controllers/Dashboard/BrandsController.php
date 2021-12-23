<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\MainCategoryRequest;
use App\Models\Brand;
use App\Models\Category;
use DB;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('dashboard.brands.create');
    }

    public function store(BrandRequest $request)
    {
        try {
        DB::beginTransaction();

        //validation
        if (!$request->has('is_active'))
            $request->request->add(['is_active' => 0]);
        else
            $request->request->add(['is_active' => 1]);

        $fileName = "";
        if ($request->has('photo')) {
            $fileName = uploadImage('brands', $request->photo);
        }

        $brand = Brand::create($request->except('_token', 'photo'));

        // save translations
        $brand->name = $request->name;
        $brand->photo = $fileName;
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
        //get specific categories and its translations
        $brand = Brand::find($id);

        if (!$brand)
            return redirect()->route('admin.brands')->with(['error' => 'This Brand Does Not Exist']);

        return view('dashboard.brands.edit', compact('brand'));
    }

    public function update($id, BrandRequest $request)
    {
        try {
            //validation
            //update DB
            $brand = Brand::find($id);

            if (!$brand)
                return redirect()->route('admin.brands')->with(['error' => 'This Brand Does Not Exist']);

            DB::beginTransaction();
            
            if ($request->has('photo')) {
                $fileName = uploadImage('brands', $request->photo);
                Brand::where('id', $id)
                    ->update([
                        'photo' => $fileName,
                    ]);
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
            //get specific categories and its translations
            $brand = Brand::find($id);

            if (!$brand)
                return redirect()->route('admin.brands')->with(['error' => 'This Brand Does Not Exist']);

            $brand->delete();

            return redirect()->route('admin.brands')->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.brands')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }
}
