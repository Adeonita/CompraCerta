<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            "Acre" => "AC",
            "Alagoas" => "AL",
            "Amapa" => "AP",
            "Amazonas" => "AM",
            "Bahia" => "BA",
            "Ceará" => "CE",
            "Distrito Federal" => "DF",
            "Espírito Santo" => "ES",
            "Goiás" => "GO",
            "Maranhão" => "MA",
            "Mato Grosso" => "MT",
            "Mato Grosso do Sul" => "MS",
            "Minas Gerais" => "MG",
            "Para" => "PA",
            "Paraiba" => "PB",
            "Parana" => "PR",
            "Pernambuco" => "PE",
            "Piaui" => "PI",
            "Roraima" => "RR",
            "Rondônia" => "RO",
            "Rio de Janeiro" => "RJ",
            "Rio Grande do Norte" => "RN",
            "Rio Grande do Sul" => "RS",
            "Santa Catarina" => "SC",
            "Sao Paulo" => "SP",
            "Sergipe" => "SE",
            "Tocantins" => "TO",
        ];

        foreach ($states as $key => $value) {
            DB::table('states')->insert([
                "name" => $key, 
                "initials" => $value
            ]);
        }
    }
}
