<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidOrderException;
use Throwable;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Session;
use App;
use Exception;

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
        try {

            $review = Review::where("cart_id", $cartId)
                ->join("carts", "carts.id", "=", "cart_id")
                ->first();
            if ($review) {

                return response()->json(['success' => true, 'message' => $review], 200);
            } else {
                return response()->json(['success' => true, 'message' => "Not Found"], 200);
            }
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e], 500);
        }
    }

    public function setCartReview(Request $request)
    {
        // $request->validate([
        //     "score" => "required",
        //     "cart_id" => "required",
        //     "comment" => "optional",
        // ]);
        try {

            $review = Review::create($request->all());
            return response()->json(['success' => true, 'message' => $review], 201);
        } catch (Throwable $e) {
            return response()->json(['error' => $e], 400);
        }
    }
}
