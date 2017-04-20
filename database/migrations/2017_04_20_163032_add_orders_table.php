<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('reception_hour');
            $table->time('delivery_hour')->nullable();
            $table->text('commentary')->nullable();
            $table->integer('total');

            $table->integer('ordered_id')->unsigned();
            $table->integer('deliveryman_id')->nullable()->unsigned();
            $table->integer('store_id')->unsigned();
            $table->integer('state_id')->unsigned();

            $table->foreign('ordered_id')->references('id')->on('users');
            $table->foreign('deliveryman_id')->references('id')->on('users');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('state_id')->references('id')->on('states');
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
        Schema::dropIfExists('orders');
    }
}
