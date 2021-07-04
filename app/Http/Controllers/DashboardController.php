<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use DB;

class DashboardController extends Controller
{
    public function index() {
        $totalPurchases = count(Cart::all());
        $valueTotalPurchases = Cart::all()->sum("total");
        
        return view('/dashboard/index', [
            "totalPurchases" => $totalPurchases,
            "valueTotalPurchases" => $valueTotalPurchases,
        ]);
    }

    public function topProducts() {
        return DB::table("items_orders")
        ->join("products", "products.id", "=", "items_orders.product_id")
        ->select(
            "items_orders.amount",
            "products.name",
        )
        ->limit(10)
        ->orderBy("amount", "desc")
        ->get();
    }
}
