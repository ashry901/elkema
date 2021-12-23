<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Enumerations\CategoryType;
use App\Http\Requests\GeneralProductRequest;
use App\Http\Requests\MainCategoryRequest;
use App\Http\Requests\OptionsRequest;
use App\Http\Requests\ProductImagesRequest;
use App\Http\Requests\ProductPriceValidation;
use App\Http\Requests\ProductStockRequest;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Option;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use DB;

class OptionsController extends Controller
{
    public function index()
    {
        $options = Option::with([
                'product' => function($prod){
                    $prod->select('id');
                },
                'attribute' => function($attr){
                    $attr->select('id');
                }
            ])
            ->select('id', 'product_id', 'attribute_id', 'price')
            ->orderBy('id', 'DESC')
            ->paginate(PAGINATION_COUNT);

        return view('dashboard.options.index', compact('options'));
    }

    public function create()
    {
        $data = [];
        $data['products'] = Product::active()->select('id')->get();

        $data['attributes'] = Attribute::select('id')->get();

        return view('dashboard.options.create', $data);
    }

    public function store(OptionsRequest $request)
    {
        try {

            DB::beginTransaction();

            //validation
            $option = Option::create([
                'attribute_id' => $request->attribute_id,
                'product_id' => $request->product_id,
                'price' => $request->price,
            ]);
            //save translations
            $option->name = $request->name;
            $option->save();

            DB::commit();
            return redirect()->route('admin.options')
                            ->with(['success' => 'Successfully Added']);

        }catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.options')
                            ->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function edit($optionId)
    {
        $data = [];

        //get specific categories and its translations
        $data['option'] = Option::find($optionId);

        if (!$data['option'])
            return redirect()->route('admin.options')
                    ->with(['error' => 'This Section Does Not Exist']);

        $data['products'] = Product::active()->select('id')->get();
        $data['attributes'] = Attribute::select('id')->get();

        return view('dashboard.options.edit', $data);
    }

    public function update($id, OptionsRequest $request)
    {
        try {
            DB::beginTransaction();

            $option = Option::find($id);

            if (!$option)
                return redirect()->route('admin.options')
                                ->with(['error' => 'This Section Does Not Exist']);

            $option->update($request->only(['price', 'product_id', 'attribute_id']));

            //save translations
            $option->name = $request->name;
            $option->save();

            DB::commit();
            return redirect()->route('admin.options')
                            ->with(['success' => 'Successfully Updated']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.options')
                            ->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            //get specific categories and its translations
            $option = Option::orderBy('id', 'DESC')->find($id);

            if (!$option)
                return redirect()->route('admin.options')
                        ->with(['error' => 'This Section Does Not Exist']);

            $option->delete();

            DB::commit();
            return redirect()->route('admin.options')
                    ->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.options')
                    ->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

}
