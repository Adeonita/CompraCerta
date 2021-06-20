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
            DepartamentsSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            EmploleeSeeder::class,
            ProductSeeder::class,
            StateSeeder::class,
        ]);
    }
}
