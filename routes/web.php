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
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PurchaseController;



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

Route::get("/", [ProductController::class, 'show']);

Route::get("/cart", function () {
    return view('cart/cart');
});

Route::get("/createAccount", function () {
    return view('account/createAccount');
});

Route::get("/login", function () {
    return view('account/loginUser');
});


Route::get("/recover", function () {
    return view('recover/recover');
});

Route::get("/address-option", function () {
    return view('address-option/index');
});
Route::get("/address-select", function () {
    return view('address-option/address-select');
});

Route::get("/department/Adminstracao", [EmployeeController::class, "showAllPurchases"]);

Route::get("/department/Separacao", function () {
    return (view('employee/separatePurchase'));
});

Route::get("/department/Empacotamento", function () {
    return view('/employee/packaging');
});

Route::get("/department/Entrega", function () {
    return (view('employee/purchasingManagement'));
});

Route::get("/evaluate-purchase", function () {
    return view('evaluate-purchase/index');
});

Route::get("/profile", function () {
    return view('user-profile/user-profile');
});

Route::get("/my-address", function () {
    return view('/my-address/my-address');
});

Route::get("/historic-page", function () {
    return view('historic-page/historic-page');
});


Route::get("/trackingPage", function () {
    return view('tracking/trackingPage');
});

Route::get("/payment", function () {
    return view('/payment/payment');
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
Route::get("/product/{id}", [ProductController::class, 'getById']);
Route::get("/products/{category_id}", [ProductController::class, 'getByCategory']);
Route::post("/products/find", [ProductController::class, 'getByName']);

Route::post("/address", [AddressController::class, 'setAddress']);
Route::get("/address/{id}", [AddressController::class, 'getByUser']);
Route::post("/address/update/user", [AddressController::class, 'updateByUser']);
Route::post("/address/update", [AddressController::class, 'updateAddress']);
Route::delete("/address/delete/{id}", [AddressController::class, 'delete']);
Route::get("/address/user/{id}", [AddressController::class, 'getAddress']);

Route::post("/cart/create", [CartController::class, 'create']);
Route::get("/cart/get/{userId}", [CartController::class, 'getByUser']);

Route::post("/payment", [PaymentController::class, 'create']);

Route::get("/department/{departmentId}", [PurchaseController::class, 'getByDepartment']);

Route::get("/cart/update/{statusId}/{cartId}", [EmployeeController::class, 'sendToNextDepartment']);