<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Alex-Sofi';
        $user->email = 'glassbiennalebg@gmail.com';
        $user->password = bcrypt('a_biennale_s');
        $user->role_id = Role::where('title', 'admin')->first()->id;
        $user->save();

        $user = new User();
        $user->name = 'Pesho';
        $user->email = 'pesho@user.com';
        $user->password = bcrypt('123456');
        $user->role_id = Role::where('title', 'user')->first()->id;
        $user->save();
    }
}
