<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table="forum";
    protected $primaryKey="postid";
    protected $fillable=['post','reply','usernme','userid'];
}
