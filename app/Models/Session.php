<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [
        "created_at",
        "expirated_at",
        "is_valid",
        "user_id",
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
