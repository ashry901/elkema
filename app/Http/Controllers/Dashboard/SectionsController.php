<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SectionRequest;
use App\Models\Section;
use DB;
use Illuminate\Support\Str;

class SectionsController extends Controller
{
    public function index ()
    {
        $sections = Section::with('_parent')->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.sections.index', compact('sections'));
    }

    public function create()
    {
        $sections = Section::select('id', 'parent_id')->get();
        return view('dashboard.sections.create', compact('sections'));
    }

    public function store(SectionRequest $request)
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
                $fileName = uploadImage('sections', $request->photo);
            }

            // //if user choose main category then we must remove paret id from the request

            if($request -> type == 1) //main category
            {
                $request->request->add(['parent_id' => null]);
            }

            //if he choose child category we must add parent id
            $section = Section::create($request->except('_token', 'photo'));

            //save translations
            $section->name              = $request->name;
            $section->description       = $request->description;
            $section->short_description = $request->short_description;
            $section->photo             = $fileName;
            $section->save();

            DB::commit();
            return redirect()->route('admin.sections')->with(['success' => 'Successfully Added']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.sections')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function edit($id)
    {
        //get specific categories and its translations
        $section = Section::orderBy('id', 'DESC')->find($id);

        if (!$section)
            return redirect()->route('admin.sections')
                ->with(['error' => 'This Section Does Not Exist']);

        return view('dashboard.sections.edit', compact('section'));
    }

    public function update($id, SectionRequest $request)
    {
        try {
            DB::beginTransaction();
            //validation
            //update DB
            $section = Section::find($id);

            if (!$section)
                return redirect()->route('admin.sections')->with(['error' => __('admin/categories.This Section Does Not Exist')]);

            if ($request->has('photo')) {
                $fileName = uploadImage('sections', $request->photo);
                Section::where('id', $id)
                    ->update([
                        'photo' => $fileName,
                    ]);
            }

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            //$category->update($request->except('_token', 'id', 'photo'));

            $section->update($request->all());

            //save translations
            $section->name              = $request->name;
            $section->description       = $request->description;
            $section->short_description = $request->short_description;
            $section->save();

            DB::commit();
            return redirect()->route('admin.sections')->with(['success' => __('admin/categories.Successfully Updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.sections')->with(['error' => __('admin/categories.Something Wrong, Please Try Again')]);
        }
    }

    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $section = Section::orderBy('id', 'DESC')->find($id);

            if (!$section)
                return redirect()->route('admin.sections')->with(['error' => 'This Section Does Not Exist']);

            $image = Str::after($section->photo, 'images/sections/');
            $image = public_path('images/sections/' . $image);
            unlink($image); //delete from folder

            $section->delete();

            return redirect()->route('admin.sections')->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.sections')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }
}
