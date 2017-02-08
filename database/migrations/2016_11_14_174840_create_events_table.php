<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateEventsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('events',function(Blueprint $table){
            $table->increments("id");
            $table->dateTime("start");
            $table->dateTime("end")->nullable();
            $table->string("place");
            $table->string("artist")->nullable();
            $table->string("entrance")->nullable();
            $table->string("title");
            $table->string("title_en")->nullable();
            $table->string("description");
            $table->binary("photo")->nullable();
            $table->string("description_en")->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo` `photo` MEDIUMBLOB NULL AFTER `description`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }

}