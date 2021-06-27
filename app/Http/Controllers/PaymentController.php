<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Cart;
use Exception;


class PaymentController extends Controller
{
    public function create(Request $request){
        $request->validate([
            "number" => "required",
            "cvv" => "required",
            "nameUser" => "required",
            "dueDate" => "required",
            "nicknameCard" => "required",
            "cart_id" => "required",
        ]);

        try {
            Payment::create($request->all());

            //TODO: Gerar registro na tabela de entrada e saída
            Cart::where(["id" => $request->cart_id])
            ->update(["status" => "in_separation"]);

        } catch(Exception $e) {
            return $e;
        }
    }
}
