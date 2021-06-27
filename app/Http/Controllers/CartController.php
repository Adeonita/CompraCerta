<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\ItemsOrder;

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

            $cart = Cart::create($request->all());
    
            $items = $request->items;
            
            $this->addItems($cart->id, $items);

        }catch(Exception $e){
            response()->json([
                'message' => $e
            ], 400);
        }
    }

    private function addItems($cartId, $items) {
        
        try {
            for ($i = 0; $i < count($items); $i++) {
                ItemsOrder::create([
                    "amount" => $items[$i]["amount"],
                    "product_id" => $items[$i]["product_id"],
                    "cart_id" => $cartId,
                ]);
            }
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