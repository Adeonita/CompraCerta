<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use App\Http\Services\CartService;


class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private function getTotal($items) {
        foreach ($items as $item => $value) {
            $unityPriceByProduct = $value['product']['price'];
            $amount = $value['quantity'];

            return $unityPriceByProduct * $amount; 
        }
    }

    private function getRandomUser() {
        $clients = User::where("user_type", "CLIENT")->select("users.id")->get();
        $quantityClients = count($clients) -1 ;
        $randomNumberInclusive = mt_rand(0, $quantityClients);

        return $clients[$randomNumberInclusive ]['id'];
    }

    private function getRandomProduct() {
        $products = Product::all();
        $quantityProducts = count($products) -1 ;
        $randomNumberInclusive = mt_rand(0, $quantityProducts);

        return $products[$randomNumberInclusive];
    }

    private function getRandomQuantity(){
        return mt_rand(1, 10);
    }

    private function getRandomStatusCart(){
        $status = ["separação", "empacotamento", "rota de entrega", "finalizado"];

        return $status[mt_rand(0, 3)];
    }

    private function createCart() {
        $itemsFromCart = [
            [
                "product" => json_decode($this->getRandomProduct(), true),
                "quantity" => $this->getRandomQuantity(),
            ],
            [
               "product" => json_decode($this->getRandomProduct(), true),
               "quantity" => $this->getRandomQuantity(),
            ],
            [
                "product" => json_decode($this->getRandomProduct(), true),
                "quantity" => $this->getRandomQuantity(),
            ],
        ];

        $cart = Cart::create([
            "user_id" => $this->getRandomUser(),
            "total" => $this->getTotal($itemsFromCart),
            "status" => $this->getRandomStatusCart(),
        ]);

        CartService::addItems($cart->id, $itemsFromCart);
    }

    public function run()
    {    
        for ($i = 0; $i < 10; $i++) {
            $this->createCart();
        }
    }
}
