<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        $products = Product::with([ 'category'])->get();
        return view('Homepage.home')->with([
            'products'       => $products,
            'categories'     => $categories,
        ]);    
    }
    public function shop(Request $request, $id)
    {
        $categories = Category::all();
        $products = Product::where('category_id',$id)->paginate(8);
        return view('Homepage.shop')->with([
            'products'      => $products,
            'categories'    => $categories,
        ]);
    }
    public function shopcategory(Request $request, $id)
    {
        $categories = Category::all();
        $products = Product::paginate(8);
        return view('Homepage.shopcategory')->with([
            'products'      => $products,
            'categories'    => $categories,
        ]);
    }
}
