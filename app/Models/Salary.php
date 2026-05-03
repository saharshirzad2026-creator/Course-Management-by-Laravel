<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = [
        "year",
        "month",
        "day",
        "amount",
        "teacher_id"
    ];
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
