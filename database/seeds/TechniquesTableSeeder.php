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
        $blownGlass = new Technique();
        $blownGlass->name = 'blown glass';
        $blownGlass->save();
        
        $kilnCastingGlass = new Technique();
        $kilnCastingGlass->name = 'kiln casting glass';
        $kilnCastingGlass->save();
        
        $pateDeVerre = new Technique();
        $pateDeVerre->name = 'pate de verre';
        $pateDeVerre->save();
        
        $molded = new Technique();
        $molded->name = 'molded';
        $molded->save();
        
        $fusedGlass = new Technique();
        $fusedGlass->name = 'fused glass';
        $fusedGlass->save();
        
        $slumping = new Technique();
        $slumping->name = 'slumping';
        $slumping->save();
        
        $freeFall = new Technique();
        $freeFall->name = 'free fall';
        $freeFall->save();
        
        $glassWithInclusions = new Technique();
        $glassWithInclusions->name = 'glass with inclusions';
        $glassWithInclusions->save();
        
        $floatGlass = new Technique();
        $floatGlass->name = 'float glass';
        $floatGlass->save();
        
        $stainedGlass = new Technique();
        $stainedGlass->name = 'stained glass';
        $stainedGlass->save();
        
        $paintedGlass = new Technique();
        $paintedGlass->name = 'painted glass';
        $paintedGlass->save();
        
        $printOnGlass = new Technique();
        $printOnGlass->name = 'print on glass';
        $printOnGlass->save();
        
        $readyMade = new Technique();
        $readyMade->name = 'ready - made';
        $readyMade->save();
        
        $sandBlastedGlass = new Technique();
        $sandBlastedGlass->name = 'sand blasted glass';
        $sandBlastedGlass->save();
        
        $engraved = new Technique();
        $engraved->name = 'engraved';
        $engraved->save();
        
        $coldWorked = new Technique();
        $coldWorked->name = 'cold-worked';
        $coldWorked->save();
        
        $laminatedGlass = new Technique();
        $laminatedGlass->name = 'laminated glass';
        $laminatedGlass->save();
        
        $mixedTechnique = new Technique();
        $mixedTechnique->name = 'mixed technique';
        $mixedTechnique->save();
    }
}
