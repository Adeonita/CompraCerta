<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        "date",
        "number",
        "cvv",
        "name",
        "dueDate",
    ];

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
