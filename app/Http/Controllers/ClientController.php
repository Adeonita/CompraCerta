<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidOrderException;
use Throwable;

use Illuminate\Http\Request;
use App\Models\Client;
use App;

class ClientController extends Controller
{
    //
    public function index()
    {
        try {

            $clients = Client::all();

            return $clients;
        } catch (Throwable $e) {
            return response()->json([
                'status' => '500',
                'message' => $e
            ]);
        }
    }

    public function create(Request $request)
    {
        $request->validate([
            "name" => "required",
            "last_name" => "required",
            "cpf" => "required",
            "email" => "required",
            "password" => "required",
            "birth_date" => "required",
        ]);
        try {
            $newClient = Client::create($request->all());
        } catch (Throwable $e) {
            return response()->json([
                'status' => '400',
                'message' => $e
            ]);
        }
        return response($newClient);
    }

    public function getById(Request $request, $id)
    {
        try {

            $client = Client::where('id', $id)->get();

            if (count($client) == 0) {
                return response()->json([
                    'status' => '404',
                    'message' => 'User not Found'
                ]);
            }

            return response($client);
        } catch (Throwable $e) {
            return response()->json([
                'status' => '500',
                'message' => $e
            ]);
        }
    }

    public function getByEmail(Request $request)
    {
        $data = $request->all();

        try {

            $client = Client::where('email', '=', $data)->get();

            if (count($client) == 0) {
                return response()->json([
                    'status' => '404',
                    'message' => 'User not Found'
                ]);
            }
            return  response($client);
        } catch (Throwable $e) {
            return response()->json([
                'status' => '500',
                'message' => $e
            ]);
        }
    }

    public function updateClientByEmail(Request $request)
    {

        $request->validate([
            "name" => "required",
            "last_name" => "required",
            "cpf" => "required",
            "email" => "required",
            "birth_date" => "required",
        ]);

        try {

            $client = Client::where('email', $request->email)->first();

            $client->name = $request->name;
            $client->cpf = $request->cpf;
            $client->last_name = $request->last_name;
            $client->birth_date = $request->birth_date;

            $client->save();

            return response($client);
        } catch (Throwable $e) {
            return response()->json([
                'status' => '400',
                'message' => $e
            ]);
        }
    }

    public function updateClientPassword(Request $request)
    {
        $request->validate([
            "password" => "required",
            "email" => 'required'
        ]);
        try {

            $client = Client::where('email', $request->email)->first();
            $client->password = $request->password;

            $client->save();
            return $client;
        } catch (Throwable $e) {
            return response()->json([
                'status' => '400',
                'message' => $e
            ]);
        }
    }
}
