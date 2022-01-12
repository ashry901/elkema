<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Subslider;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class SubslidersController extends Controller
{
    public function index()
    {
        $subsliders = Subslider::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.slidersub.index', compact('subsliders'));
    }

    public function create()
    {
        $subsliders = Subslider::select('id')->get();
        return view('dashboard.slidersub.create', compact('subsliders'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         =>  'required',
            'description'   =>  'required',
            'picture'       =>  'required|image|nullable|max:1024'
        ]);

        $file_extension = $request->picture->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'ashry/images/subsliders';
        $request->picture->move($path, $file_name);

        //$subslider = new Subslider();
        $subslider = Subslider::create($request->except('_token', 'picture'));

        $subslider->title       = $request->input('title');
        $subslider->description = $request->input('description');
        $subslider->picture     = $file_name;

        $subslider->save();

        return Redirect()->route('admin.subsliders')->with('success','Slider Inserted Successfully');
    }

    public function edit($id)
    {
        $subslider = Subslider::find($id);

        if (!$subslider)
            return redirect()->route('admin.subsliders')->with(['error' => 'This Brand Does Not Exist']);

        return view('dashboard.slidersub.edit', compact('subslider'));
    }

    public function update ($id, Request $request)
    {
        $this->validate($request, [
            'title'         =>  'required',
            'description'   =>  'required',
            'picture'       =>  'required|image|nullable|max:1024'
        ]);

        $subslider = Subslider::find($id);

        $subslider->title       = $request->input('title');
        $subslider->description = $request->input('description');

        if($request->hasFile('picture')){

            $file_extension = $request->picture->getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path = 'ashry/images/subsliders';
            $request->picture->move($path, $file_name);

            $image = Str::after($subslider->picture, 'ashry/images/subsliders/');
            $image = base_path('ashry/images/subsliders/' . $image);
            //unlink($image); //delete from folder
            $subslider->delete();
            //Storage::delete('ashry/images/subsliders/'.$subslider->picture);

            $subslider->picture = $file_name;
        }

        //$subslider->update();
        $subslider->update($request->except('_token', 'id', 'photo'));

        $subslider->title       = $request->title;
        $subslider->description = $request->description;
        $subslider->save();

        return redirect()->route('admin.subsliders')->with(['success' => 'Successfully Updated']);

    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $subslider = Subslider::find($id);

            if (!$subslider)
                return redirect()->route('admin.subsliders')->with(['error' => 'This Brand Does Not Exist']);

            $image = Str::after($subslider->picture, 'ashry/images/subsliders/');
            $image = base_path('ashry/images/subsliders/' . $image);
            unlink($image); //delete from folder

            $subslider->delete();

            DB::commit();
            return redirect()->route('admin.subsliders')->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.subsliders')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

}
