<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use DB;
use Tigo\DocumentBr\Cpf;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class UserSeeder extends Seeder
{
    private function generateEmployees($amoutEmployees)
    {
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
                $employeeName . "@compracerta.com",
                $employeeCpf->generate(),
                Hash::make('password'),
                $departmentsId,
            ];

            array_push($employees, $employee);

            $departmentsId++;
        }

        return $employees;
    }


    private function generateClients()
    {
        $clients = [
            [
                "name" => "Luke",
                "last_name" => "Skywalker",
                "cpf" =>  "12345678911",
                "email" => "lukeskywalker" . "@gmail.com",
                "password" => "123456789",
                "user_type" => "CLIENT",
                "birth_date" => Carbon::create('2000', '01', '01'),
                "department_id" => NULL
            ],
            [
                "name" => "Lea",
                "last_name" => "Skywalker",
                "cpf" =>  "12345678000",
                "email" => "leaskywalker" . "@gmail.com",
                "password" => "123456789",
                "user_type" => "CLIENT",
                "birth_date" => Carbon::create('2000', '01', '01'),
                "department_id" => NULL
            ],
            [
                "name" => "Nome",
                "last_name" => "De teste",
                "cpf" =>  "12345678913",
                "email" => "teste" . "@gmail.com",
                "password" => "123456789",
                "user_type" => "CLIENT",
                "birth_date" => Carbon::create('2000', '01', '01'),
                "department_id" => NULL
            ],
            [
                "name" => "Teste Employee",
                "last_name" => "De Luca",
                "cpf" =>  "12345678914",
                "email" => "teste2" . "@gmail.com",
                "password" => "123456789",
                "user_type" => "EMPLOYEE",
                "birth_date" => Carbon::create('2000', '01', '01'),
                "department_id" => 1
            ],
        ];

        return $clients;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employees = $this->generateEmployees(5);
        $clients = $this->generateClients();

        foreach ($employees as $key => $value) {

            DB::table('users')->insert([
                "name" => $value[0],
                "last_name" => $value[1],
                "email" => $value[2],
                "cpf" => $value[3],
                "password" => $value[4],
                "user_type" => "EMPLOYEE",
                "birth_date" => Carbon::create('2000', '01', '01'),
                "department_id" => $value[5],
            ]);
        }
        foreach ($clients as $client) {
            DB::table('users')->insert($client);
        }
    }
}
