<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cargo;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cargo = new Cargo();
        $cargo->id = 1;
        $cargo->cargo = "Administrador";
        $cargo->salario_hora = 300;
        $cargo->save();

        $cargo = new Cargo();
        $cargo->id = 2;
        $cargo->cargo = "Supervisor";
        $cargo->salario_hora = 300;
        $cargo->save();

        $cargo = new Cargo();
        $cargo->id = 3;
        $cargo->cargo = "Cajero";
        $cargo->salario_hora = 300;
        $cargo->save();

        $cargo = new Cargo();
        $cargo->id = 4;
        $cargo->cargo = "Lavador";
        $cargo->salario_hora = 300;
        $cargo->save();

        $cargo = new Cargo();
        $cargo->id = 5;
        $cargo->cargo = "Mecanico";
        $cargo->salario_hora = 300;
        $cargo->save();

        $cargo = new Cargo();
        $cargo->id = 6;
        $cargo->cargo = "Llantero";
        $cargo->salario_hora = 300;
        $cargo->save();
    }
}
