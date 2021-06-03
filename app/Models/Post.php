<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    #create関数が使えるようになるため！
    protected $fillable = [
        'title',
        'body',
    ];

}
