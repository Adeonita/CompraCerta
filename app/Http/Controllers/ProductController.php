<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function show()
    {
        $products = Product::all();


        $meat = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where("categories.name", "carnes")
            ->select(
                "products.id",
                "products.name",
                "products.price",
                "products.imagePath",
            )
            ->limit(4)
            ->get();

        $frozen = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where("categories.name", "congelados")
            ->select(
                "products.id",
                "products.name",
                "products.price",
                "products.imagePath",
            )
            ->limit(4)
            ->get();

        $cereals = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where("categories.name", "cereais")
            ->select(
                "products.id",
                "products.name",
                "products.price",
                "products.imagePath",
            )
            ->limit(4)
            ->get();


        return view("/home/products")->with(
            [
                "products" => $products,
                "meat" => $meat,
                "frozen" => $frozen,
                "cereals" => $cereals,
            ]
        );
    }

    public function getByCategory($categoryId)
    {
        $products = Product::where("category_id", $categoryId)->get();
        return view("/category/index")->with("products", $products);
    }

    public function getByName(Request $request)
    {
        $search = $_POST['name'];

        $products = Product::where('name', 'like', '%' . $search . '%')->get();
        return view("/category/index")->with("products", $products);
    }


    public function getById($productId)
    {
        $product = Product::where("id", $productId)->get()[0];

        $product->imagePath = "images/products/$product->imagePath";
        $product->price = $product->price;

        return view("/product/product")->with("product", $product);
    }
}
