<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
      'id', 'created_at', 'updated_at', 'title', 'content'
    ];
}
