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

//  public function addcart(){
//      $s
//  }
// public function searchProduct(Request $request)
// {
//     $key = $request->key;

//     $categories = Category::all();
//     $productLimit   = Product::orderBy('created_at', 'desc')->limit(9)
//     ->get();
//     $products = Product::where('name', 'like', '%'. $key . '%')
//                 ->orWhere('price', 'like', '%' .$key. '%')
//                 ->paginate(10);
//     $lasterProduct  = $this->formatDataProduct($productLimit);

//     return view('home.listproductsearch', with([
//         'products'=>$products,
//         'categories' => $categories,
//         'lasterProduct' => $lasterProduct,

//     ]));
// }

// /**
//  * formatDataProduct
//  *
//  *  @param Product $products
//  *
//  * @return mixed
//  */
// public function formatDataProduct($products)
// {
//     $productFormat = [];
//     for ($i=1; $i <= 3; $i++) { 
//         foreach ($products as $key => $value) {
//             if ($key+1 <= $i*3 && $key >= ($i-1)*3) {
//                 $productFormat[$i][$key] = $value;
//             }
//         }
//     }
//     return $productFormat;
// }


// public function getProductByCategory($id)
// {     
//     $products   = Product::where('category_id', $id)
//                         ->limit(8)
//                         ->get();

//     $view = view("home._ajax_product", compact('products'))->render();//gán lại $product với category_id đã chọn
//     return response()->json(['status' => 'success','html' => $view]);
// }

// public function review(Request $request)
// {
//     try {
//         if (!auth()->user()) { 
//             // nếu thằng user này  đã dăng nhâp thì  nó sẽ dc comment ngược lại chưa đăng nhập nó sẽ trả về  thông báo hoặc fomr login
//             // return redirect()->back()->with(['message' => 'Chưa dăng nhập']);
//             return redirect()->route('login')->with('message',' vui lòng đăng nhập để được đánh giá sản phẩm');

//         }
//         $user = auth()->user();
//         $data = [
//             'product_id'  => $request->product_id,
//             'user_id'  => $user->id,
//             'description'  => $request->description,
//             'rate'  => $request->rate
//         ];
//         $review = Review_product::create($data);
//         if ($review) {
//             return redirect()->back()->with(['message' => 'success']);
//         }
//         return redirect()->back()->with(['message' => 'Errors']);
//     } catch (\Throwable $th) {
//          info($th);
//         return redirect()->back()->with(['message' => 'Errors']);
//     }
// }

// public function delelteComment($id)
// {
//     try {
//         $comment = Review_product::find($id);
//         $comment->delete();
//         return redirect()->back();
//     } catch (\Exception $e) {
//         info($e);
//         return redirect()->back();
//     }
// }
}
