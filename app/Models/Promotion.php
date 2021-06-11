<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "dateStart",
        "dateEnd",
        "sale",
        "categoryId",
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
