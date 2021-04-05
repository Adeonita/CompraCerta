<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(){
        $categories = Category::all("name");

        return $categories;
    }
}
