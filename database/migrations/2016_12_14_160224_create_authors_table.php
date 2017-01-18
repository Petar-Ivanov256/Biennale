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
            $table->string('email');
            $table->string('phoneNumber')->nullable();
            $table->string('info')->nullable();
            $table->binary('photo')->nullable();
            $table->boolean('isVisible')->default(false);
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `authors` CHANGE COLUMN `photo` `photo` MEDIUMBLOB NULL AFTER `info`");
    }

    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
