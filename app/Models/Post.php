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
    ];
    public $timestamps = true;


    // Metodo de relación de la base de datos cateogira con post
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_fk', 'categoria_id');
    }
}
