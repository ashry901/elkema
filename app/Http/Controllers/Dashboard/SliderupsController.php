<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SliderupRequest;
use App\Models\Sliderup;
use Illuminate\Support\Str;
use DB;

class SliderupsController extends Controller
{
    public function index()
    {
        $sliderups = Sliderup::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.sliderup.index', compact('sliderups'));
    }

    public function create()
    {
        $sliderups = Sliderup::select('id')->get();
        return view('dashboard.sliderup.create', compact('sliderups'));
    }

    public function store(SliderupRequest $request)
    {
        try {
            DB::beginTransaction();

            //validation
            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $fileName = "";
            if ($request->has('picture')) {
                $fileName = uploadImage('sliderups', $request->picture);
            }

            $sliderup = Sliderup::create($request->except('_token', 'picture'));

            // save translations
            $sliderup->description = $request->description;
            $sliderup->picture = $fileName;
            $sliderup->save();

            DB::commit();
            return redirect()->route('admin.sliderups')->with(['success' => 'Added Successfully']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.sliderups')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function edit($id)
    {
        //get specific categories and its translations
        $sliderup = Sliderup::find($id);

        if (!$sliderup)
            return redirect()->route('admin.sliderups')->with(['error' => 'This Brand Does Not Exist']);

        return view('dashboard.sliderup.edit', compact('sliderup'));
    }

    public function update($id, SliderupRequest $request)
    {
        try {
            //validation
            //update DB
            $sliderup = Sliderup::find($id);

            if (!$sliderup)
                return redirect()->route('admin.sliderups')->with(['error' => 'This Brand Does Not Exist']);

            DB::beginTransaction();

            if ($request->has('picture')) {
                $fileName = uploadImage('sliderups', $request->picture);
                Sliderup::where('id', $id)
                    ->update([
                        'picture' => $fileName,
                    ]);
            }

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $sliderup->update($request->except('_token', 'id', 'picture'));

            //save translations
            $sliderup->description = $request->description;
            $sliderup->save();

            DB::commit();
            return redirect()->route('admin.sliderups')->with(['success' => 'Successfully Updated']);

        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('admin.sliderups')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function destroy($id)
    {
        try {
            $sliderup = Sliderup::find($id);

            if (!$sliderup)
                return redirect()->route('admin.sliderups')->with(['error' => 'This Brand Does Not Exist']);

            $image = Str::after($sliderup->picture, 'images/sliderups/');
            $image = public_path('images/sliderups/' . $image);
            unlink($image); //delete from folder

            $sliderup->delete();

            return redirect()->route('admin.sliderups')->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
//            DB::rollback();
            return redirect()->route('admin.sliderups')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }
}
