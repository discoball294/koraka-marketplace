<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$user = new \App\User();
        $user->name = 'Bryan Asa Kristian';
        $user->email = 'bryan.kristian478@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->assignRole('user');*/

        $user = new \App\User();
        $user->name = 'Admin Satu';
        $user->email = 'admin@koraka.id';
        $user->password = bcrypt('123456');
        $user->save();
        $user->assignRole('admin');

    }
}
