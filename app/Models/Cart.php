<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "items",
        "isList",
        "status",
        "amount",
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
