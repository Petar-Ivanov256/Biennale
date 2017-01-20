<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTechniqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_technique', function (Blueprint $table) {
            $table->timestamps();

            $table->integer('work_id')->unsigned();
            $table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');

            $table->integer('technique_id')->unsigned();
            $table->foreign('technique_id')->references('id')->on('techniques')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_technique');
    }
}
