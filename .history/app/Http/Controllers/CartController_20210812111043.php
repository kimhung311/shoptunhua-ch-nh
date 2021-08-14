<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddCart(Request $request,$id)
    {
        $sessionAll = Session::all();
        $carts = empty($sessionAll['carts']) ? [] : $sessionAll['carts'];
        if (!empty($carts[$id])) {
            $carts[$id]['quantity'] += $request->quantity;
            // dd($carts[$id]['quantity']);
            session(['carts' => $carts]);

         
        }else {
            $product = Product::findOrFail($id);
            $newProduct = [
                'id'        => $id,
                'name'      => $product->name,
                'quantity'  => $request->quantity,
                'price'     => $product->price,
                'image'     => $product->image,
                ''
            ];
            $carts[$id] = $newProduct;
            session(['carts' => $carts]);
            $product->update(['quantity' => $product->quantity - $carts[$id]['quantity']]);
            $qty = $product->quantity - $carts[$id]['quantity'];
            $product->quantity = $qty;
            // dd($qty);
            // $product->save();
        }
       
        // $product = Product::whereId($id)->first();
        // $product->update(['quantity' => $product->quantity - $carts[$id]['quantity']]);
            return redirect()->route('cart.cart-info');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getcart()
    {
        $data = [];
                //get data from SESSION 
                $sessionAll = Session::all();
                $carts = empty($sessionAll['carts']) ? [] : $sessionAll['carts'];
                // foreach ($carts as $cart){
                //     $total += $cart['quantity'] * $cart['price'];  
                // }
                // $data['total'] = $total;

                $data['carts'] = $carts;

                session(['step_by_step' => 1]);
                // dd($data);
                return view('cart.cart', $data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
