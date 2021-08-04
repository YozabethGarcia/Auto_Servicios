<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto_compra extends Model
{
    use HasFactory;

    public function compra(){
        return $this->belongsTo('App\Models\compra');
    }

    public function producto(){
        return $this->belongsTo('App\Models\producto');
    }
}
