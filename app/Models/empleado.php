<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    use HasFactory;

    public function cargo(){
        return $this->belongsTo('App\Models\cargo');
    }

    public function asistencias(){
        return $this->hasMany('App\Models\asistencia');
    }

    public function adelantos(){
        return $this->hasMany('App\Models\adelanto');
    }
}
