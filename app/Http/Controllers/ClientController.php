<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

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
        $validated = $request->validate([
            "name" => "required",
            "last_name" => "required",
            "cpf" => "required",
            "email" => "required",
            "password" => "required",
            "birth_date" => "required",
        ]);
        return $validated;
    }
}
