<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rol = new Role();
        $rol->id = 1;
        $rol->rol = "Administrador";
        $rol->save();
        $rol->id = 2;
        $rol->rol = "Supervisor";
        $rol->save();
        $rol->id = 3;
        $rol->rol = "Cajero";
        $rol->save();
    }
}
