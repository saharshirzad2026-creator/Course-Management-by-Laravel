<?php

namespace App\Models;

use App\Models\Sinf;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function salaries(){
        return $this->hasMany(Salary::class);
    }
    public function sinfs(){
        return $this->hasMany(Sinf::class);
    }
}
