<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \Spatie\Permission\Models\Role();
        $role->name = 'User';
        $role->save();

        $role = new \Spatie\Permission\Models\Role();
        $role->name = 'Admin';
        $role->save();

    }
}
