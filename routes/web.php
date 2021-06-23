<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;

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
##  VIEWS

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

Route::get("/address-option", function () {
    return view('address-option/address-option');
});

Route::get("/purchasing-management", function () {
    return (view('employee/purchasingManagement'));
});

Route::get("/separate-purchasing", function () {
    return (view('employee/separatePurchase'));
});

Route::get("/evaluate-purchase", function () {
    return view('evaluate-purchase/index');
});

Route::get("/user-profile", function () {
    return view('user-profile/user-profile');
});

Route::get("/historic-page", function () {
    return view('historic-page/historic-page');
});

Route::get("/product", function () {
    return view('product/product');
});

Route::get("/trackingPage", function () {
    return view('tracking/trackingPage');
});

Route::get("/payment", function () {
    return view('/payment/payment');
});

Route::get("/packaging", function () {
    return view('/employee/packaging');
});

Route::get("/dashboard", function () {
    return view('/dashboard/index');
});

Route::get("/dashboard-purchases", function () {
    return view('/dashboard/purchases');
});

Route::get("/navigation", function () {
    return view('/employee/navigation');
});


## BACKEND ROUTES

// Route::post("/client/create", [ClientController::class, 'create']);
// Route::post("/client/email", [ClientController::class, 'getByEmail']);
// Route::post("/client/update", [ClientController::class, 'updateClientByEmail']);
// Route::post("/client/update/password", [ClientController::class, 'updateClientPassword']);
// Route::get("/client", [ClientController::class, 'index']);
// Route::get("/client/{id}", [ClientController::class, 'getById']);

Route::get("/users", [UserController::class, 'index']);
Route::get("/users/clients", [UserController::class, 'getClients']);
Route::get("/users/employees", [UserController::class, 'getEmployees']);
Route::get("/users/{id}", [UserController::class, 'getById']);
Route::post("/users", [UserController::class, 'create']);
Route::post("/users/email", [UserController::class, 'getByEmail']);
Route::post("/users/update", [UserController::class, 'updateUserByEmail']);
Route::post("/users/password", [UserController::class, 'updateUserPassword']);
Route::post("/login", [UserController::class, 'login']);
Route::post("/logout", [UserController::class, 'logout']);


Route::get("/categories", [CategoryController::class, 'show']);

Route::get("/states", [StateController::class, 'show']);

Route::get("/employees", [EmployeeController::class, 'show']);

Route::get("/departments", [DepartmentsController::class, 'show']);

Route::get("/products", [ProductController::class, 'show']);
Route::get("/products/{category_id}", [ProductController::class, 'getByCategory']);
Route::post("/products/find", [ProductController::class, 'getByName']);

Route::post("/address", [AddressController::class, 'setAddress']);
Route::get("/address/{id}", [AddressController::class, 'getByUser']);
Route::post("/address/update", [AddressController::class, 'updateByUser']);
Route::delete("/address/delete/{id}", [AddressController::class, 'delete']);
