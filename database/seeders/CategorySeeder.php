<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "Hortifruti", 
            "Bebidas",
            "Biscoitos",
            "Carnes",
            "Cereais",
            "Congelados",
            "Frios e laticínios",
            "Limpeza",
            "Higiene",
            "Alimentos",
        ];

        foreach ($categories as $key =>  $value) {
            DB::table('categories')->insert([
                "name" => $value,
            ]);
        }

    }
}
