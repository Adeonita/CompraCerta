<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Departments;

class PurchaseController extends Controller
{
    public function getByDepartment($departmentId){
        $statusCart = Departments::where('id', $departmentId)->get()[0]['name'];
        $purchases = Cart::where('status', $statusCart)
        ->join('users', "carts.user_id", '=', 'users.id')
        ->select(
            "carts.id",
            "carts.status",
            "users.name",
        )->get();

        return $purchases;
    }
}
