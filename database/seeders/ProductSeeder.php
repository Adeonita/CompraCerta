<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Exceptions\InvalidOrderException;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename = "public/products.json";

        if (!file_exists($filename)) {
            echo "File not found";
            return;
        }
        else {
            $json = file_get_contents($filename);
            $data = json_decode($json, true);
            
            foreach ($data as $key => $object) {
                DB::table("products")->insert([
                    "category_id" => $object["cat_id"],
                    "name" => $object["name"],
                    "description" => $object["description"],
                    "price" => $object["price"],
                    "imagePath" => $object["image"],
                ]);
            }
        }        
    }
}
