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
        $departments = [
            "Adminstracao",
            "Empacotamento",
            "Separacao",
            "Entrega",
        ];

        foreach ($departments as $key =>  $value) {
            DB::table('departments')->insert([
                "name" => $value,
            ]);
        }

    }
}
