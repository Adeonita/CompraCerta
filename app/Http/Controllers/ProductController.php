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
        //TODO: Reutilizar a view de componentes de product card
        // return view("/components/productCard")->with("products", $products);

    }

    public function getByName(Request $request) {
        return Product::where('name', 'like', '%' . $request->name . '%')->get();
    }


    public function getById($productId){
        $product = Product::where("id", $productId)->get()[0];

        $product->imagePath = "images/products/$product->imagePath";
        $product->price = $product->price;

        return view("/product/product")->with("product", $product);
    }
}
