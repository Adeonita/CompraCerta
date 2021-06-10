<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        "publicArea",
        "number",
        "district",
        "complement",
        "state",
        "cep",
        "userId",
    ];
}