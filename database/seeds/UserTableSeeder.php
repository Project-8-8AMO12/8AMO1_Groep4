<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $user = new User;
        $user->name = 'Mitch';
        $user->email = 'mitchell.n@outlook.com';
        $user->password = bcrypt('test');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());
    }
}
