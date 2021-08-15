<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      /*  $producto = new producto();
        $producto->id = 1;
        $producto->barcode = "1234";
        $producto->descripcion = "Cuarto de aceite para motor a gasolina warco 20W50";
        $producto->stock = 40;
        $producto->min_stock = 20;
        $producto->max_stock = 120;
        $producto->precio = 120;
        $producto->tipo_producto_id = 3;
        $producto->save();*/
        Producto::factory(50)->create();
    }
}
