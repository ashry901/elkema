<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeRequest;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\MainCategoryRequest;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class AttributesController extends Controller
{
    public function index()
    {
        $attributes = Attribute::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.attributes.index', compact('attributes'));
    }

    public function create()
    {
        return view('dashboard.attributes.create');
    }

    public function store(AttributeRequest $request)
    {
        try {
            //return $request;
            DB::beginTransaction();

            $attribute = Attribute::create([]);

            //save translations
            $attribute->name = $request->name;
            $attribute->save();

            DB::commit();
            return redirect()->route('admin.attributes')
                            ->with(['success' => 'Added Successfully']);

        }catch(\Exception $ex){
            DB::rollback();
            return redirect()->route('admin.attributes')
                            ->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function edit($id)
    {
        $attribute = Attribute::find($id);

        if (!$attribute)
            return redirect()->route('admin.attributes')
                            ->with(['error' => 'This Attribute Does Not Exist']);

        return view('dashboard.attributes.edit', compact('attribute'));
    }

    public function update($id, AttributeRequest $request)
    {
        try {
            DB::beginTransaction();

            $attribute = Attribute::find($id);

            if (!$attribute)
                return redirect()->route('admin.attributes')
                                ->with(['error' => 'This Attribute Does Not Exist']);

            //save translations
            $attribute->name = $request->name;
            $attribute->save();

            DB::commit();
            return redirect()->route('admin.attributes')
                            ->with(['success' => 'Successfully Updated']);

        } catch (\Exception $ex) {
            
            DB::rollback();
            return redirect()->route('admin.attributes')
                            ->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $brand = Brand::find($id);

            if (!$brand)
                return redirect()->route('admin.brands')
                            ->with(['error' => 'This Attribute Does Not Exist']);

            $brand->delete();

            return redirect()->route('admin.brands')
                            ->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.brands')
                            ->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

}
