<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->double('calification_average')->nullable();
            $table->string('street', 100);
            $table->integer('number');
            $table->time('open_hour');
            $table->time('close_hour');
            $table->time('lunch_hour')->nullable();
            $table->time('lunch_after_hour')->nullable();
            $table->string('start_day', 10);
            $table->string('end_day', 10);
            $table->integer('favorites_quantity')->nullable();

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('stores');
    }
}
