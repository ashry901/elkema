<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Sliderup;
use App\Models\Brand;

class HomeController extends Controller
{
    public function home()
    {
        $data=[];
        $data['sliders'] = Slider::get(['photo']);
        $data['sliderups'] = Sliderup::get(['picture']);

        $data['categories'] = Category::parent()
            ->select('id', 'slug', 'photo')
            ->with(['childrens' => function($q) {
                $q->select('id', 'parent_id', 'slug');
                $q->with(['childrens' => function ($qq) {
                    $qq->select('id', 'parent_id', 'slug');
                    // $qq->with(['childrens' => function($qqq){
                    //     $qqq->select(
                    //         'id',
                    //         'is_active',
                    //         'photo',
                    //         'created_at',
                    //         'updated_at'
                    //     );
                    // }]);
                }]);
            }])->get();
        //$data['categories'] = Category::get(['photo']);
        return view('front.home', $data);
    }



}
