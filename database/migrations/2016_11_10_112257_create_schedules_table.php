<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('events');
            
            // Тук явно ще се подреждат събитията от events и разбрах, че няма да се въвеждат всички в програмата
            // Трябва още да ги разпитаме, за да знаем какво още ще има в тази таблица
            
            // TODO: Schedules colomns
            // Docs: https://laravel.com/docs/5.3/migrations
            // Този файл го създадох с командата: php artisan make:migration create_schedules_table --create=schedules
            // Като си готов с таблицата цъкаш php artisan migrate:refresh в cmd-то
            // Ако ти се занимава пиши и seed-ове, мога и аз да ги напиша, но по-късно
            
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
        Schema::dropIfExists('schedules');
    }
}
