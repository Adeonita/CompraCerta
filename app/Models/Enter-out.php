<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enterOut extends Model
{
    use HasFactory;

    protected $fillable = [
        "cart",
        "department",
        "entrance",
        "exit",
    ];
}