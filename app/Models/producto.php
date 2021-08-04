<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    public function tipo(){
        return $this->belongsTo('App\Models\tipo_producto','tipo_producto_id');
    }

    public function ventas(){
        return $this->hasMany('App\Models\producto_venta');
    }

    public function compras(){
        return $this->hasMany('App\Models\producto_compra');
    }

    public function proveedores(){
        return $this->hasMany('App\Models\producto_proveedor');
    }
}
