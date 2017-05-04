<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsVisibleToEvents extends Migration
{
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->boolean('isVisible')->default(true);
        });
    }

    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('isVisible');
        });
    }
}
