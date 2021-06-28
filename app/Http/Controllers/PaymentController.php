<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Cart;
use App\Http\Services\CartService;
use Exception;


class PaymentController extends Controller
{
    public function create(Request $request){
        $data = $request->validate([
            "number" => "required",
            "cvv" => "required",
            "nameUser" => "required",
            "dueDate" => "required",
            "cart" => "required",
            "user_id" => "required"
        ]);

        try {
            $cartItems = json_decode($request->input('cart'), true);
            $total = 0;

            foreach( $cartItems as $item ) {
                $total += $item['product']['price'];
            }

            $cart = CartService::create([
                "user_id" => $request->input('user_id'),
                "cart" => $request->input('cart'),
                "name" => "",
                "total" => $total,
            ]);
            
            $data['cart_id'] = $cart->id;

            $payment = Payment::create($data);

            return redirect('/');

        } catch(Exception $e) {
            return $e;
        }
    }
}
