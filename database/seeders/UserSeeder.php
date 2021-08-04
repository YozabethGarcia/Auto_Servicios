<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->id = 1;
        $user->name = "Administrador";
        $user->email = "admin@autoservicios.com";
        $user->password = "\$10\$kwl0fhNZDI4Mpo7S.fFuie4.SjjbMW2P8z6MqNY8mL3/XLCJAZKd6";
        $user->current_team_id = 1;
        $user->save() ;
    }
}
