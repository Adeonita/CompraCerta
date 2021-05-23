<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            "João" => [ "da silva", "js@employee.com", "05478965412" "010203", 1],
        ];
    
        foreach ($employees as $key => $value) {
            
            DB::table('employees')->insert([
                "name" => $key,
                "lastName" => $value[0],
                "email" => $value[1],
                "cpf" => $value[2],
                "password" => $value[3],
                "departments_id" => $value[4],
            ]);
        }
    }
}
