<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __construct(){
    //    dd(2322);
   }
    public function index(){
        $CountUser = User::count();
        $CountAdmin = Admin::count();
        $CountOrder = Order::count();
        $CountProduct = Product::orderBy('created_at', 'desc')->limit(12)->count();
        // $CountOrder = Order::count();



        return view('admin.dashboard')->with([
            'CountUser' => $CountUser,
            'CountAdmin' => $CountAdmin,
            'CountOrder' => $CountOrder,
            'CountProduct' => $CountProduct,


        ]);
    }
}