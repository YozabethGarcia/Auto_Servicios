<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto_venta extends Model
{
    use HasFactory;

    public function venta(){
        return $this->belongsTo('App\Models\venta');
    }

    public function producto(){
        return $this->belongsTo('App\Models\producto');
    }
}
