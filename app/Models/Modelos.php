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
        'ubicacion',
        'ojos',
        'altura',
        'cabello',
        'fecha_nacimiento',
        'description',
        'create_at',
        'update_at'
    ];
}
