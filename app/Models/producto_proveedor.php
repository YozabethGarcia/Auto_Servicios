<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto_proveedor extends Model
{
    use HasFactory;

    public function producto(){
        return $this->belongsTo('App\Models\producto');
    }

    public function proveedor(){
        return $this->belongsTo('App\Models\proveedor');
    }
}
