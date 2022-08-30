<?php

use App\Http\Controllers\{
    CategoryController,
    LoginController,
    OrderController,
    ProductController
};
use Illuminate\Foundation\Auth\User;
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
Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/pedidos',[OrderController::class,'index'])->name('orders');
});


Route::get('/', [ProductController::class,'index'])->name('home');

Route::get('/categories',[CategoryController::class,'index'])->name('categories');

Route::get('/product/{id}',[ProductController::class,'show'])->name('product');

Route::get('/login',function (){
    return view('auth.login');
})->name('login');

Route::get('/carrinho',function(){
    return view('cart.show');
})->name('cart');

Route::post('/login',[LoginController::class,'authenticate'])->name('loginUser');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

