<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryOut extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [
        "entrance",
        "exit",
        "cart_id",
        "department_id",
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function department() {
        return $this->hasMany(Departments::class);
    }
}
