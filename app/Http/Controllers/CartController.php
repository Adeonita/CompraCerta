<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            "name" => "required",
            "is_list" => "required",
            "status" => "required",
            "amount" => "required",
            "user_id" => "required",
        ]);

        try {
            return Cart::create($request->all());
        } catch(Exception $e){
            return $e;
        }
    }
}