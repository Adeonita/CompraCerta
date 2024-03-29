<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Exception;
use Throwable;



class AddressController extends Controller
{
    public function setAddress(Request $request, Exception $e)
    {
        $request->validate([
            "public_area" => "required",
            "number" => "required",
            "district" => "required",
            "complement" => "required",
            "cep" => "required",
            "city" => "required",
            "user_id" => "required",
            "state_id" => "required",
        ]);

        try {

            Address::create($request->all());
            return response()->json(['success' => true], 201);
        } catch (Throwable $e) {
            return response()->json(['error' => $e], 400);
        }
    }

    public function updateByUser(Request $request)
    {
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
        } catch (Throwable $e) {
            return response(['error' => $e], 400);
        }
    }


    public function updateAddress(Request $request)
    {
        $request->validate([
            "public_area" => "required",
            "number" => "required",
            "district" => "required",
            "complement" => "required",
            "cep" => "required",
            "city" => "required",
            "state_id" => "required",
            "address_id" => "required",

        ]);
        try {
            $address = Address::where('id', $request->address_id)->first();

            if (!$address) {
                return response()->json([
                    'sucess' => 'false',
                    'message' => 'endereco não encontrado'
                ]);
            } else {

                $address->number = $request->number;
                $address->public_area = $request->public_area;
                $address->district = $request->district;
                $address->complement = $request->complement;
                $address->cep = $request->cep;
                $address->city = $request->city;
                $address->state_id = $request->state_id;

                $address->save();
                return response()->json([
                    'success' => 'true',
                    'message' => $address
                ]);
            }
        } catch (Exception $e) {
            return response(['error' => $e], 400);
        }
    }
    public function getAddress($id)
    {
        try {
            $address = Address::where('id', $id)
                ->first();
            if ($address) {
                return redirect()->route("address-option/index")->with("address", $address);
                return response()->json([
                    'success' => 'true',
                    'message' => $address
                ], 200);
            } else {
                return response()->json([
                    'success' => 'false',
                    'message' => "not adress"
                ], 200);
            }
        } catch (Exception $e) {
            return response()->json(['error' => "message"], 400);
        }
    }

    public function getByUser($id)
    {
        try {
            $address = Address::where('user_id', $id)
                ->join('states', "addresses.state_id", '=', 'states.id')
                ->select(
                    'addresses.id',
                    'addresses.public_area',
                    'addresses.number',
                    'addresses.district',
                    'addresses.complement',
                    'addresses.cep',
                    'addresses.city',
                    'states.name as state',
                    'states.id as state_id'
                )
                ->get();
            return response()->json([
                'success' => 'true',
                'message' => $address
            ], 200);
        } catch (Throwable $e) {
            return response(['error' => $e], 400);
        }
    }

    public function delete($id)
    {
        try {
            return Address::where('id', $id)->delete();
        } catch (Throwable $e) {
            return response(['error' => $e], 400);
        }
    }
}
