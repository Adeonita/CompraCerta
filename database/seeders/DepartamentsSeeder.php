<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DepartamentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departaments = [
            "Adminstracao",
            "Empacotamento",
            "Separacao",
            "Entrega",
        ];

        foreach ($departaments as $key =>  $value) {
            DB::table('departaments')->insert([
                "name" => $value,
            ]);
        }

    }
}
