<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
// use Illuminate\Http\Request;
// use App\Models\Brand;
// use App\Models\Image;
// use App\Models\Tag;
// use DB;


class CategoryController extends Controller
{
    public function productsBySlug($slug)
    {
        $data=[];

        $data['category'] = Category::where('slug', $slug)->first();
        // return $data['category']->products;

        if($data['category'])
            $data['products'] = $data['category']->products;

        // Image::find('product_id')->images[0]->photo;

        return view('front.products', $data);
    }
}
