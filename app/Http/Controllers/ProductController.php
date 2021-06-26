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

    private function formmatPrice($price) {
        $unformmatedPrice = explode('.',$price);

        if(array_key_exists(1, $unformmatedPrice)) {
            if(strlen($unformmatedPrice[1]) > 1) {
                return $price;
            }
            
            return $unformmatedPrice[0].",".$unformmatedPrice[1] * 10;
        }

        return $unformmatedPrice[0].",00";
    }

    public function getById($productId){
        $product = Product::where("id", $productId)->get()[0];

        $product->imagePath = "images/products/$product->imagePath";
        $product->price = $this->formmatPrice($product->price);

        return view("/product/product")->with("product", $product);
    }
}
