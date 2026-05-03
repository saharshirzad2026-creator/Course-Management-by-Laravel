<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        "last_name",
        "user_id",
        "phone_number",
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function payment(){
        return $this->hasMany(payment::class);
    }
}
