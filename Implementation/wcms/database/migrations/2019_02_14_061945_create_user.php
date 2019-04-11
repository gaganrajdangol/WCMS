<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('userid');
            $table->string('fullname',30);
            $table->string('address',50);
            $table->string('contact',10);
            $table->string('email',25);
            $table->string('username',15)->unique();
            $table->string('password');

            $table->unsignedInteger('usertypeid');
            $table->foreign('usertypeid')->references('usertypeid')->on('usertype');            
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
        Schema::dropIfExists('user');
    }
}
