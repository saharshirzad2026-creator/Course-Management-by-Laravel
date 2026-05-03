<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        "user_id",
        "bio",
        "last_name",
        "image_url",
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
