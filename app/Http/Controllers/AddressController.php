<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Exception;


class AddressController extends Controller
{
    public function setAddress(Request $request, Exception $e) {
        $request->validate([
            "public_area" => "required",
            "number" => "required",
            "district" => "required",
            "complement" => "required",
            "cep" => "required",
            "user_id" => "required",
        ]);

        try {
            
            return Address::create($request->all());
        }
        catch (Throwable $e) {
            return response()->json(['error' => $e], 400);
        }
    }

    public function updateByUser(Request $request) {
        $request->validate([
            "user_id" => "required",
        ]);

        try {
            $address = Address::where('user_id', $request->user_id)->first();

            $address->public_area = $request->public_area ? $request->public_area : $address->public_area;
            $address->number = $request->number ? $request->number : $address->number;
            $address->complement = $request->complement ? $request->complement : $address->complement;
            $address->cep = $request->cep ? $request->cep : $address->cep;

            $address->save();
            
            return response()->json([ 'message'=> 'ok' ], 200);
        }catch(Throwable $e) {
            return response([ 'error' => $e ], 400);
        }
    }

    public function getByUser($id) {
        try {
            return Address::where('user_id', $id)->get();
        }catch (Throwable $e) { 
            return response([ 'error' => $e ], 400);
        }
    }

    public function delete($id) {
        try {
            return Address::where('id', $id)->delete();
        }catch (Throwable $e) { 
            return response([ 'error' => $e ], 400);
        }
    }
}

