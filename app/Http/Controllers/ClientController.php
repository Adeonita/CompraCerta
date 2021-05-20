<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App;

class ClientController extends Controller
{
    //
    public function index()
    {
        $clients = Client::all()->paginate(5);


        return $clients;
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
        $newClient = Client::create($request->all());

        if (!$newClient->save()) {
            return response()->json([
                'status' => '400',
                'message' => 'Erro ao criar cliente no banco '
            ]);
        }
        return ('success');
    }

    public function getClient(Request $request)
    {
        $request->validate([
            "id" => "required"
        ]);

        $id = $request->id;

        $client = DB::table('clients')->where('id', $id)->first();

        if ($client) {
            return $client;
        }
        return ([
            404,
            'Not Found'
        ]);
    }
}
