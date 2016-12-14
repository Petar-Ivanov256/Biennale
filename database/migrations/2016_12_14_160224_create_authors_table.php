<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('country');
            $table->string('info');
            $table->binary('photo')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
