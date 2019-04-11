<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumReply extends Model
{
    protected $table="forumreply";
    protected $primaryKey="replyid";
    protected $fillable=['reply','username','postid','userid'];
}
