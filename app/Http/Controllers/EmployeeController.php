<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DB;

class EmployeeController extends Controller
{
    public function show(){
        return Employee::all();
    }

    public function showAllPurchases(){
        $purchases = DB::table('carts')
        ->join('users', "carts.user_id", '=', 'users.id')
        ->select(
            "carts.id",
            "carts.status",
            "users.name",
        )->get();

        return view('employee/purchasingManagement')->with("purchases", $purchases);
    }
}