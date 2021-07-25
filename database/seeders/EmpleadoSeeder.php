<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $emp = new empleado();
        $emp->id=1;
        $emp->pnombre = "Luis";
        $emp->snombre = "Fernando";
        $emp->papellido = "Benítez";
        $emp->sapellido = "López";
        $emp->identidad = "0801199600001";
        $emp->telefono = "99032422";
        $emp->email = "lfbenitez15@gmail.com";
        $emp->direccion = "21 de octubre, tegucigalpa";
        $emp->estado = true;
        $emp->cargo_id = 3;
        $emp->save();
    }
}
