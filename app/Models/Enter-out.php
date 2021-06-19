<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enterOut extends Model
{
    use HasFactory;

    protected $fillable = [
        "department",
        "entrance",
        "exit",
    ];

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
