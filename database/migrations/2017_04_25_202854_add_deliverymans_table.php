<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeliverymansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverymans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imei',30)->unique();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->tinyinteger('available')->default(0);

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
        Schema::dropIfExists('deliverymans');
    }
}
