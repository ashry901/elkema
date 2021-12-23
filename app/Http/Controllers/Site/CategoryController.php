<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CategoryController extends Controller
{
    // public function productsBySlug($slug)
    // {
    //     $data=[];
    //     $data['category'] = Category::where('slug', $slug)->first();


    //     //return $data['category']->products;

    //     if($data['category'])
    //         $data['products'] = $data['category']->products;

    //     // return Product::find($Image)->images[0]->photo;

    //     return view('front.products', $data);
    // }

    public function productsBySlug($slug)
    {
        $data = [];
        $data['category'] = Category::where('slug', $slug)->first();

        $data['category']->products;

        if ($data['category'])
            $data['products'] = $data['category']->products;

        return view('front.products', $data);
    }
}



