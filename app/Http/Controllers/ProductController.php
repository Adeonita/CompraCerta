<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show() {
        return Product::all();
    }

    public function getByCategory($categoryId) {  
        $products = Product::where("category_id", $categoryId)->get();
        return view("/category/index")->with("products", $products);
    }

    public function getByName(Request $request) {
        return Product::where('name', 'like', '%' . $request->name . '%')->get();
    }
}
