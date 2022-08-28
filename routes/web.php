<?php

use App\Http\Controllers\{
    CategoryController,
    ProductController
};
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

Route::get('/', [ProductController::class,'index'])->name('home');
Route::get('/categories',[CategoryController::class,'index'])->name('categories');

Route::get('/product/{id}',[ProductController::class,'show'])->name('product');

Route::get('/login',function (){
    return view('auth.login');
});


Route::get('/pedidos',function (){
    return view('orders.show');
})->name('orders');

Route::get('/carrinho',function(){
    return view('cart.show');
})->name('cart');
