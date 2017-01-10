<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->string('name');
            $table->string('country');
            $table->string('email');
            $table->string('phoneNumber');
            
            $table->string('title');
            $table->string('englishTitle');
            
            $table->string('dimensions');
            $table->string('installationGuide');
            $table->string('year');
            $table->string('synopsis');

            $table->binary('photo1')->nullable();
            $table->binary('photo2')->nullable();
        });

        DB::statement("ALTER TABLE `application_forms` CHANGE COLUMN `photo1` `photo1` MEDIUMBLOB NULL AFTER `synopsis`");
        DB::statement("ALTER TABLE `application_forms` CHANGE COLUMN `photo2` `photo2` MEDIUMBLOB NULL AFTER `photo1`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_forms');
    }
}
