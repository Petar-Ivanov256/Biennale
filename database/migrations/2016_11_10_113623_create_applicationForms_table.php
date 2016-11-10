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
        Schema::create('applicationForms', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name', 100);
            $table->string('country', 100);
            $table->string('email', 100);
            $table->string('phoneNumber', 75);
            
            $table->string('originalTitle', 200);
            $table->string('englishTitle', 200);
            $table->string('technique', 75);
            $table->string('dimentions', 100);
            $table->string('howToInstall', 250);
            $table->string('yearCreated', 25);
            $table->string('synopsis', 200);
            $table->binary('picture1');
            $table->binary('picture2');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicationForms');
    }
}
