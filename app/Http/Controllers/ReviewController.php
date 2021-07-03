<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidOrderException;
use Throwable;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Session;
use App;

class ReviewController extends Controller
{
    public function index()
    {
        try {

            $reviews = Review::all();

            return $reviews;
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ]);
        }
    }

    public function getByCart($cartId)
    {
        return Review::where("cart_id", $cartId)
            ->join("carts", "carts.id", "=", "cart_id")
            ->get();
    }

    public function setCartReview(Request $request)
    {
        $request->validate([
            "score" => "required",
            "comment" => "required",
            "cart_id" => "required",
        ]);
        try {

            $review = Review::create($request->all());
            return response()->json(['success' => true, 'message' => $review], 201);
        } catch (Throwable $e) {
            return response()->json(['error' => $e], 400);
        }
    }
}
