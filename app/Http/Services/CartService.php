<?php
namespace App\Http\Services;

use App\Models\Cart;
use App\Models\ItemsOrder;

class CartService {

    public static function create($data) {
        $cart = Cart::create($data);
        $cartItems = json_decode($data['cart'], true);
        CartService::addItems($cart->id, $cartItems);
        return $cart;
    }

    public static function addItems($cartId, $items) {
        foreach ($items as $item) {
            ItemsOrder::create([
                "amount" => $item['quantity'],
                "product_id" => $item["product"]['id'],
                "cart_id" => $cartId,
            ]);
        }
    }

}