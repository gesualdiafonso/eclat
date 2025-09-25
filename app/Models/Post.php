<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'slug',
        'image',
        'author',
        'category',
        'resume',
        'content',
        'create_at',
        'update_at'
    ];
}
