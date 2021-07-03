<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class DashboardController extends Controller
{
    public function index() {
        $totalPurchases = count(Cart::all());
        return view('/dashboard/index', [
            "totalPurchases" => $totalPurchases,
        ]);
    }
}
