<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_work', function (Blueprint $table) {
            $table->timestamps();

            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('authors');

            $table->integer('work_id')->unsigned();
            $table->foreign('work_id')->references('id')->on('works');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_work');
    }
}
