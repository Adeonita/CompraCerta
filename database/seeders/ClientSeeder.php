<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $clients = [
            [
                "name" => "Luke",
                "last_name" => "Skywalker",
                "cpf" =>  "12345678911",
                "email" => "lukeskywalker" . "@gmail.com",
                "password" => "123456789",
                "birth_date" => Carbon::create('2000', '01', '01'),
            ],
            [
                "name" => "Lea",
                "last_name" => "Skywalker",
                "cpf" =>  "12345678000",
                "email" => "leaskywalker" . "@gmail.com",
                "password" => "123456789",
                "birth_date" => Carbon::create('2000', '01', '01'),
            ]
        ];

        foreach ($clients as $client) {
            DB::table('clients')->insert($client);
        }
    }
}
