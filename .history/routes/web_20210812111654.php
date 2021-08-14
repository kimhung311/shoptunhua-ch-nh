<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Homepage.home');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/',[HomeController::class,'index'])->name('index');

Route::group(['prefix' => 'home', 'as' => 'home.'], function () {
    
    Route::get('shop/{id}', [HomeController::class, 'shop'])->name('shop');
    Route::get('shopcategory/{id}', [HomeController::class, 'shopcategory'])->name('shopcategory');


    });
Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
    Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('detail');
    // Route::post('/review', [ProductController::class, 'review'])->name('review');
    // Route::get('/delete-comment/{id}', [ProductController::class, 'deleteComment'])->name('delete-comment');
    Route::get('/search', [ProductController::class, 'searchProduct'])->name('search'); 
    Route::get('/category/{id}', [ProductController::class, 'getProductByCategory'])->name('category'); 
        
    });
Route::group(['prefix' => 'cart', 'as' => 'cart.'], function () {
        Route::post('/addcart/{id}', [CartController::class,'AddCart'])->name('addcart');
        Route::get('/', [CartController::class,'getcart'])->name('cart-info');
        Route::get('checkout',[CartController::class,'checkout'])->name('checkout_bill')
});
