<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsOrder extends Model
{
    use HasFactory;


    protected $fillable = [
        "amount",
        "product_id",
        "cart_id",
    ];

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
