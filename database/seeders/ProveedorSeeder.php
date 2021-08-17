<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\proveedor;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $proveedor = new proveedor();
        $proveedor->id = 1;
        $proveedor->nombre = "Warco";
        $proveedor->rtn = "080119990108018";
        $proveedor->telefono = "32142563";
        $proveedor->email = "warco@warco.com";
        $proveedor->direccion = "Barrio los mangos, Choluteca";
        $proveedor->save();
    }
}
