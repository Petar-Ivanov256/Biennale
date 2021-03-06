<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TechniquesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserAdminSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(EventsSeeder::class);
        $this->call(CountriesTableSeeder::class);
    }
}
