<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Review_product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function detail($id, Request $request){
        $data = [];

        $categories = Category::all();
    
        $product = Product::where('products.id', $id)
                        ->with('product_images')
                        ->with('product_detail')
                        ->first();
                        // dd($product);
        $data['product']    = $product;
        $data['categories']  = $categories;

        return view('products.detail', $data);
    }

    public function searchProduct(Request $request)
    {
        $key = $request->key;
        $categories = Category::all();
        $products = Product::where('name', 'like', '%'. $key . '%')
                    ->orWhere('price', 'like', '%' .$key. '%')
                    ->paginate(10);
        return view('Homepage.shopcategory',
            with([
                    'products'=>$products,
                    'categories' => $categories,
            ]));
    }

    public function review(Request $request){
        try {
            if(!auth()->user()){
                return redirect()->route('login')->with('message', 'Vui lòng đăng nhập để đánh giá sản phẩm');
            }
            $user = auth()->user();
                $data = [
                    'product_id' => $request -> product_id,
                    'comment'    => $request -> comment,
                    // 'image'      => $request -> image_review,
                    // 'star'       => $request -> star,
                ];
                $review = Review_product::create($data);
                if ($review) {
                    return redirect()->back()->with(['message' => 'success']);
                }
                return redirect()->back()->with(['message' => 'Errors']);
        }catch (\Throwable $th) {
            info($th);
           return redirect()->back()->with(['message' => 'Errors']);
        }
    }


}
