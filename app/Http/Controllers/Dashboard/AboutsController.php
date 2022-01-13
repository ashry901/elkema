<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Traits\PicTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class AboutsController extends Controller
{
    use PicTrait;

    public function index()
    {
        $abouts = About::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.abouts.index', compact('abouts'));
    }

    public function create()
    {
        $abouts = About::select('id')->get();
        return view('dashboard.abouts.create', compact('abouts'));
    }

    public function store(AboutRequest $request)
    {
        //try {
            //DB::beginTransaction();

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $file_name = $this->saveImage($request->photo , 'ashry/images/abouts');

            $abouts = About::create($request->except('_token', 'photo'));

            // save translations
            $abouts->title      = $request->title;
            $abouts->short_dis  = $request->short_dis;
            $abouts->long_dis   = $request->long_dis;
            $abouts->photo      = $file_name;
            $abouts->save();

            //DB::commit();
            return redirect()->route('admin.abouts')->with(['success' => 'Added Successfully']);

//        } catch (\Exception $ex) {
//            DB::rollback();
//            return redirect()->route('admin.abouts')->with(['error' => 'Something Wrong, Please Try Again']);
//        }
    }

    public function edit($id)
    {
        $about = About::find($id);

        if (!$about)
            return redirect()->route('admin.abouts')->with(['error' => 'This Brand Does Not Exist']);

        return view('dashboard.abouts.edit', compact('about'));
    }

    public function update($id, AboutRequest $request)
    {
        //try {

            $about = About::find($id);

            if (!$about)
                return redirect()->route('admin.abouts')->with(['error' => 'This Brand Does Not Exist']);

            //DB::beginTransaction();

            if ($request->has('photo')) {
                $file_name = $this->saveImage($request->photo, 'ashry/images/abouts');
                About::where('id', $id)->update(['photo' => $file_name]);
            }

            $image = Str::after($about->photo, 'ashry/images/abouts/');
            $image = base_path('ashry/images/abouts/' . $image);
            unlink($image); //delete from folder

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $about->update($request->except('_token', 'id', 'photo'));

            // save translations
            $about->title     = $request->title;
            $about->short_dis = $request->short_dis;
            $about->long_dis  = $request->long_dis;
            $about->photo     = $file_name;
            $about->save();

            //DB::commit();
            return redirect()->route('admin.abouts')->with(['success' => 'Successfully Updated']);

//        } catch (\Exception $ex) {
//
//            DB::rollback();
//            return redirect()->route('admin.abouts')->with(['error' => 'Something Wrong, Please Try Again']);
//        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $about = About::find($id);

            if (!$about)
                return redirect()->route('admin.abouts')->with(['error' => 'This Brand Does Not Exist']);

            $image = Str::after($about->photo, 'ashry/images/abouts/');
            $image = base_path('ashry/images/abouts/' . $image);
            unlink($image); //delete from folder

            $about->delete();

            DB::commit();
            return redirect()->route('admin.abouts')->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.abouts')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }
}

