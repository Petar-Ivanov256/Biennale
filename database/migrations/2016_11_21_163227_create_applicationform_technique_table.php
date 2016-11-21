<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationformTechniqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_form_technique', function(Blueprint $table)
        {
            $table->integer('application_form_id')->unsigned()->nullable();
            $table->foreign('application_form_id')->references('id')->on('application_forms');

            $table->integer('technique_id')->unsigned()->nullable();
            $table->foreign('technique_id')->references('id')->on('techniques');

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
        Schema::dropIfExists('application_form_technique');
    }
}
