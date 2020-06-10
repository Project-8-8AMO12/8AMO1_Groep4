<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $role_regular_user = new Role;
        $role_regular_user->name = 'user';
        $role_regular_user->description = 'Een normale gebruiker';
        $role_regular_user->save();

        $role_admin_user = new Role;
        $role_admin_user->name = 'admin';
        $role_admin_user->description = 'Een gebruiker met rechten';
        $role_admin_user->save();
    }
}
