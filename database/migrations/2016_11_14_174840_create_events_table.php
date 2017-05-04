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
            $table->string("place_en");
            $table->string("participants")->nullable();
            $table->string('participants_en')->nullable();
            $table->string("entrance")->nullable();
            $table->string("entrance_en")->nullable();
            $table->string("title");
            $table->string("title_en")->nullable();
            $table->string("description", 2000);
            $table->string("description_en", 2000)->nullable();
            $table->binary("photo1")->nullable();
            $table->binary("photo2")->nullable();
            $table->binary("photo3")->nullable();
            $table->binary("photo4")->nullable();
            $table->binary("photo5")->nullable();
            $table->binary("photo6")->nullable();
            $table->binary("photo7")->nullable();
            $table->binary("photo8")->nullable();
            $table->binary("photo9")->nullable();
            $table->binary("photo10")->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('order_num')->nullable()->default(0);
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo1` `photo1` MEDIUMBLOB NULL AFTER `description`");
        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo2` `photo2` MEDIUMBLOB NULL AFTER `photo1`");
        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo3` `photo3` MEDIUMBLOB NULL AFTER `photo2`");
        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo4` `photo4` MEDIUMBLOB NULL AFTER `photo3`");
        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo5` `photo5` MEDIUMBLOB NULL AFTER `photo4`");
        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo6` `photo6` MEDIUMBLOB NULL AFTER `photo5`");
        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo7` `photo7` MEDIUMBLOB NULL AFTER `photo6`");
        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo8` `photo8` MEDIUMBLOB NULL AFTER `photo7`");
        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo9` `photo9` MEDIUMBLOB NULL AFTER `photo8`");
        DB::statement("ALTER TABLE `events` CHANGE COLUMN `photo10` `photo10` MEDIUMBLOB NULL AFTER `photo9`");

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
