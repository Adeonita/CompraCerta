<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "is_list",
        "status",
        "total",
        "user_id",
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
