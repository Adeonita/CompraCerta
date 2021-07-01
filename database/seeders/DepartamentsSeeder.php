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
            "Separacao",
            "Empacotamento",
            "Rota de Entrega",
            "Finalizado",
        ];

        foreach ($departments as $key =>  $value) {
            DB::table('departments')->insert([
                "name" => $value,
            ]);
        }

    }
}
