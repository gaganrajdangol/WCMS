<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('orderid');
            $table->date('order_date');
            $table->integer('quantity');

            $table->unsignedInteger('userid');
            $table->foreign('userid')->references('userid')->on('users');
            

            $table->unsignedInteger('itemid');
            $table->foreign('itemid')->references('itemid')->on('item');
            $table->rememberToken();    

            
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
        Schema::dropIfExists('order');
    }
}
