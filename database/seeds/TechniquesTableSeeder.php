<?php

use Illuminate\Database\Seeder;
use App\Technique;

class TechniquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allTechniques = [
            'blown glass',
            'kiln casting glass',
            'pate de verre',
            'molded',
            'fused glass',
            'slumping',
            'free fall',
            'glass with inclusions',
            'float glass',
            'stained glass',
            'painted glass',
            'print on glass',
            'ready - made',
            'sand blasted glass',
            'engraved',
            'cold-worked',
            'laminated glass',
            'mixed technique',
            'lampworking',
            'etching',
            'layered glass',
            'other'
        ];

        foreach ($allTechniques as $technique) {
            DB::table('techniques')->insert([
                'name' => $technique
            ]);
        }

        // todo: other
    }
}
