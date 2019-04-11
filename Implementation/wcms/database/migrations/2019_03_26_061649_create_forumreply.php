<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumreply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forumreply', function (Blueprint $table) {
            $table->increments('replyid');
            $table->string('reply',200);
            $table->string('username',50);

            $table->unsignedInteger('postid');
            $table->foreign('postid')->references('postid')->on('forum'); 
            
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
        Schema::dropIfExists('forumreply');
    }
}
