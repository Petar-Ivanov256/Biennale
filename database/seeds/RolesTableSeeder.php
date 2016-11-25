<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Role();
        $user->title = 'user';
        $user->save();
        
        $admin = new Role();
        $admin->title = 'admin';
        $admin->save();
        
        $superAdmin = new Role();
        $superAdmin->title = 'super admin';
        $superAdmin->save();
    }
}
