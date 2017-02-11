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
            'title' => 'Изложба',
            'title_en' => 'Exhibition'
        ]);

        DB::table('categories')->insert([
            'title' => 'Лекция',
            'title_en' => 'Lecture'
        ]);

        DB::table('categories')->insert([
            'title' => 'Творческа работилница',
            'title_en' => 'Workshop'
        ]);

        DB::table('categories')->insert([
            'title' => 'Конкурс',
            'title_en' => 'Contest'
        ]);

        DB::table('categories')->insert([
            'title' => 'Кампания',
            'title_en' => 'Campaign'
        ]);
    }
}
