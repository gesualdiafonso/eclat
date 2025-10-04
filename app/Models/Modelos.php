<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    protected $table = 'modelos';
    protected $primaryKay = 'id';
    protected $fillable =[
        'name',
        'image',
        'altura',
        'bust',
        'cintura',
        'zapato',
        'vestido',
        'tamano',
        'ojos',
        'cabello',
        'fecha_nacimiento',
        'ubicacion',
        'instagram',
        'description',
        'estilos',
    ];

    protected $cast = [
        'estilos' => 'array'
    ];
}
