<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $user->password = Hash::make("admin123");
        $user->current_team_id = 1;
        $user->save() ;
    }
}
