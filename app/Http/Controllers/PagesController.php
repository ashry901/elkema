<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Session;
//use DB;


class PagesController extends Controller
{
    // public function view_product_by_category($category_name)
    // {
    //     return view('client.shop');
    // }

    // public function home()
    // {
    //     return view('front.home');
    // }

    // public function portfolio()
    // {
    //     return view('front.portfolio');
    // }

    // public function about()
    // {
    //     return view('front.about');
    // }

    // public function services()
    // {
    //     //$products = DB::table('products')->get();
    //     //$products = Product::get();
    //     //$products = Product::all();
    //     //$products = Product::orderBy('product_name', 'asc')->get();
    //     //$products = Product::orderBy('product_name', 'desc')->get();
    //     //$products = Product::orderBy('product_name', 'desc')->paginate(1);
    //     //$products = Product::inRandomOrder()->paginate(1);
    //     //$products = DB::table('products')->simplePaginate(1);
    //     //$products = Product::paginate(1);
    //     //$products = DB::table('products')->orderBy('id')->cursorPaginate(1);
    //     return view('pages.services')->with('products', $products);

    // }

    // public function show($id)
    // {
    //     //$product = DB::table('products')->where('id', $id)->first();
    //     $product = Product::find($id);
    //     return view('pages.show')->with('product', $product);
    // }

    // public function create()
    // {
    //     return view('pages.create');
    // }

    // public function saveproduct(Request $request)
    // {
    //     // $product = new Product();
    //     // $product->product_name = $request->product_name;
    //     // $product->product_price = $request->product_price;
    //     // $product->product_description = $request->product_description;

    //     // $product->save();

    //     $data = array();
    //     $data['product_name'] = $request->product_name;
    //     $data['product_price'] = $request->product_price;
    //     $data['product_description'] = $request->product_description;

    //     DB::table('products')->insert($data);

    //     Session::put('success', 'The Product Has Been Added Successfuly');

    //     return redirect('/create');
    // }
}
