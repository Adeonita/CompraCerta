<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class AddressSeeder extends Seeder
{

    public function generateAddress($id)
    {
        $stateId = 27;
        return  [[
            "public_area" => "rua " . Str::random(random_int(3, 10)),
            "number" => (random_int(1, 999)),
            "district" => Str::random(7),
            "complement" => Str::random(random_int(5, 10)),
            "cep" => (random_int(10000000, 99999999)),
            "city" => "Salvador",
            "user_id" => $id,
            "state_id" => random_int(1, $stateId),
        ]];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = 11; //max users

        for ($i = 0; $i < $users; $i++) {
            $address = $this->generateAddress($i + 1);
            DB::table('addresses')->insert($address);
        }
        for ($i = 0; $i < 5; $i++) {
            $address = $this->generateAddress(random_int(1, $users));
            DB::table('addresses')->insert($address);
        }
    }
}
