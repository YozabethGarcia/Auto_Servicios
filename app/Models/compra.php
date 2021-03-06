<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;

    public function productos(){
        return $this->hasMany('App\Models\producto_compra');
    }
    public function proveedor(){
        return $this->belongsTo('App\Models\proveedor');
    }
}
