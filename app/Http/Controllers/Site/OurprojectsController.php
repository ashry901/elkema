<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Section;

class OurprojectsController extends Controller
{
    public function about()
    {
        return view('front.about');
    }

    public function main()
    {
        $data=[];

        $data['sections'] = Section::parent()
            ->select('id', 'slug', 'photo')
            ->with(['childrens' => function ($q) {
                $q->select('id', 'parent_id', 'slug', 'photo');
            }])->get();

        return view('front.sections.index', $data);
    }

    public function show($slug)
    {
        $data=[];

        $data['sections'] = Section::where('slug', $slug)->get();

        return view('front.sections.show', $data);
    }

}
