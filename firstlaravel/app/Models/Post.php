<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        // Mass asign into your database
    protected $fillable = ['title', 'body'];
}
