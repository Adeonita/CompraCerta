<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        "score",
        "comment",
        "cart_id"
    ];


    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
