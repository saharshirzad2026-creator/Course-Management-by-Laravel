<?php

namespace App\Models;

use App\Models\Teacher;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;

class Sinfs extends Model
{
    //
    public function payment(){
        return $this->hasMany(Payment::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
