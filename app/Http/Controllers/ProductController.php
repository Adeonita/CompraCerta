<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show() {
        return Product::all();
    }

    public function getByCategory(Request $request) {
        return Product::where('category_id', $request->categoryId)->get();
    }

    public function getByName(Request $request) {
        return Product::where('name', 'like', '%' . $request->name . '%')->get();
    }
}
