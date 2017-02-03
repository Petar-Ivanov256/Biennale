<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title');
            $table->string('englishTitle');
            
            $table->string('dimensions');
            $table->string('installationGuide');
            $table->string('year');
            $table->string('synopsis');
            $table->string('synopsis_en')->nullable();

            $table->binary('photo1')->nullable();
            $table->binary('photo2')->nullable();
        });

        DB::statement("ALTER TABLE `works` CHANGE COLUMN `photo1` `photo1` MEDIUMBLOB NULL AFTER `synopsis`");
        DB::statement("ALTER TABLE `works` CHANGE COLUMN `photo2` `photo2` MEDIUMBLOB NULL AFTER `photo1`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
