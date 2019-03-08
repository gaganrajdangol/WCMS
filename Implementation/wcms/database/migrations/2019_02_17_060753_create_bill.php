<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('billid');
            $table->date('bill_date');
            
            $table->unsignedInteger('userid');
            $table->foreign('userid')->references('userid')->on('users');
            

            $table->unsignedInteger('orderid');
            $table->foreign('orderid')->references('orderid')->on('order');
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
        Schema::dropIfExists('bill');
    }
}
