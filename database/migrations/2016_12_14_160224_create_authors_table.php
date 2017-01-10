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
            // TODO: isVisible
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `authors` CHANGE COLUMN `photo` `photo` MEDIUMBLOB NULL AFTER `info`");
    }

    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
