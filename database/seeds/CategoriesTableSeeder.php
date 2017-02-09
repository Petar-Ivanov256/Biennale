<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Изложби',
            'title_en' => 'Exhibitions'
        ]);

        DB::table('categories')->insert([
            'title' => 'Лекции',
            'title_en' => 'Lectures'
        ]);

        DB::table('categories')->insert([
            'title' => 'Творчески работилници',
            'title_en' => 'Workshops'
        ]);

        DB::table('categories')->insert([
            'title' => 'Конкурси',
            'title_en' => 'Contests'
        ]);

        DB::table('categories')->insert([
            'title' => 'Кампании',
            'title_en' => 'Campaigns'
        ]);
    }
}
