<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;

class CartController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            "name" => "optional",
            "is_list" => "required",
            "status" => "required",
            "total" => "required",
            "user_id" => "required",
            "cart" => "required"
        ]);
        
        try {
            //TODO: Gerar registro na tabela de entrada e saída
            CartService::create($request->all())

        }catch(Exception $e){
            response()->json([
                'message' => $e
            ], 400);
        }
    }

    private function addItems() {
        
        try {
            
        } catch(Exception $e) {
            response()->json([
                'message' => $e
            ], 400);
        }
    }

    public function getByUser($userId){
        return Cart::where("user_id", $userId)
        ->join("items_orders", "carts.id", "=", "items_orders.cart_id")
        ->join("products", "products.id", "=", "items_orders.product_id")
        ->get();
    }
 }