<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::get("/", function () {
    return view('home/products');
});

Route::get("/cart", function () {
    return view('cart/cart');
});

Route::get("/createAccount", function () {
    return view('account/createAccount');
});

Route::get("/recover", function () {
    return view('recover/recover');
});

Route::get("/categories", [CategoryController::class, 'show']);