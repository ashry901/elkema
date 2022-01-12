<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Traits\PicTrait;
use Illuminate\Http\Request;
//use App\Http\Enumerations\CategoryType;
use App\Http\Requests\MainCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;
use DB;

class MainCategoriesController extends Controller
{
    use PicTrait;

    public function index ()
    {
        $categories = Category::with('_parent')->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        //$categories = Category::parent()->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::select('id', 'parent_id')->get();
        return view('dashboard.categories.create', compact('categories'));
    }

    public function store(MainCategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            //validation
            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $file_name = $this->saveImage($request->photo , 'ashry/images/categories');

            // //if user choose main category then we must remove paret id from the request
            if($request -> type == 1) //main category
            {
                $request->request->add(['parent_id' => null]);
            }

            //if he choose child category we must add parent id
            $category = Category::create($request->except('_token', 'photo'));

            //save translations
            $category->name = $request->name;
            $category->photo = $file_name;
            $category->save();

            DB::commit();
            return redirect()->route('admin.maincategories')->with(['success' => 'Successfully Added']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.maincategories')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function edit($id)
    {
        //get specific categories and its translations
        $category = Category::orderBy('id', 'DESC')->find($id);

        if (!$category)
            return redirect()->route('admin.maincategories')
                            ->with(['error' => 'This Section Does Not Exist']);

        return view('dashboard.categories.edit', compact('category'));
    }

    public function update($id, MainCategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            $category = Category::find($id);

            if (!$category)
                return redirect()->route('admin.maincategories')->with(['error' => __('admin/categories.This Section Does Not Exist')]);


            if ($request->has('photo')) {
                $file_name = $this->saveImage($request->photo, 'ashry/images/categories');
                Category::where('id', $id)->update(['photo' => $file_name]);
            }

            $image = Str::after($category->photo, 'ashry/images/categories/');
            $image = base_path('ashry/images/categories/' . $image);
            unlink($image); //delete from folder

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            //$category->update($request->except('_token', 'id', 'photo'));

            $category->update($request->all());

            //save translations
            $category->name = $request->name;
            $category->save();

            DB::commit();
            return redirect()->route('admin.maincategories')->with(['success' => __('admin/categories.Successfully Updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.maincategories')->with(['error' => __('admin/categories.Something Wrong, Please Try Again')]);
        }
    }

    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $category = Category::orderBy('id', 'DESC')->find($id);

            if (!$category)
                return redirect()->route('admin.maincategories')->with(['error' => 'This Section Does Not Exist']);

            $image = Str::after($category->photo, 'ashry/images/categories/');
            $image = base_path('ashry/images/categories/' . $image);
            unlink($image); //delete from folder

            $category->delete();

            return redirect()->route('admin.maincategories')->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.maincategories')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

}


