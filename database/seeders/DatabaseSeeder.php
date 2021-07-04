<?php

namespace Database\Seeders;

use Tigo\DocumentBr\Cpf;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StateSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            DepartamentsSeeder::class,
            UserSeeder::class,
            CartSeeder::class,
            AddressSeeder::class
        ]);
    }
}
