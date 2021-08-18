<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\facturacione;

class FacturacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $facturacion = new facturacione();
        $facturacion->cai = "254558793100541";
        $facturacion->min_rango = 1;
        $facturacion->max_rango = 2500;
        $facturacion->ultima_generada =0;
        $facturacion->max_fecha ="2021-12-31";
        $facturacion->activo = true;
        $facturacion->id=1;
        $facturacion->save();
    }
}
