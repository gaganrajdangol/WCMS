<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table="item";
    protected $fillable=['item_name','item_type','price','item_image','item_description'];
}
