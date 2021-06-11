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
    ];


    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
