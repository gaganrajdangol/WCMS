<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminmail', function (Blueprint $table) {
            $table->increments('adminmail');
            $table->string('mail',200);
            $table->unsignedInteger('userid');            
            $table->foreign('userid')->references('userid')->on('users');      
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
        Schema::dropIfExists('adminmail');
    }
}
