<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tipo_producto;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipo = new tipo_producto();
        $tipo->id = 1;
        $tipo->tipo = "Llanta";
        $tipo->save();

        $tipo = new tipo_producto();
        $tipo->id = 2;
        $tipo->tipo = "Neumatico";
        $tipo->save();

        $tipo = new tipo_producto();
        $tipo->id = 3;
        $tipo->tipo = "Lubricantes";
        $tipo->save();

        $tipo = new tipo_producto();
        $tipo->id = 4;
        $tipo->tipo = "Repuesto";
        $tipo->save();

        $tipo = new tipo_producto();
        $tipo->id = 5;
        $tipo->tipo = "Accesorio";
        $tipo->save();
        $tipo = new tipo_producto();

        $tipo->id = 6;
        $tipo->tipo = "Consumible";
        $tipo->save();
    }
}
