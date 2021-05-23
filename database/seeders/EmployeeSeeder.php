<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Tigo\DocumentBr\Cpf;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{

    private function generateEmployees($amoutEmployees) {
        $employees = [];

        $departmentsId = 1;

        for ($i = 0; $i < $amoutEmployees; $i++) { 
            if ($departmentsId === 5) {
                $departmentsId = 1;
            }

            $employeeCpf = new Cpf();
            $employeeName = Str::random(10);

            $employee = [
                $employeeName,
                Str::random(10), 
                $employeeName."@compracerta.com", 
                $employeeCpf->generate(),
                Hash::make('password'), 
                $departmentsId,
            ];

            array_push($employees, $employee);
            
            $departmentsId ++;
        }

        return $employees;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = $this->generateEmployees(5);
    
        foreach ($employees as $key => $value) {
            
            DB::table('employees')->insert([
                "name" => $value[0],
                "lastName" => $value[1],
                "email" => $value[2],
                "cpf" => $value[3],
                "password" => $value[4],
                "departments_id" => $value[5],
            ]);
        }
    }
}
