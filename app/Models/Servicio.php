<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'slug',
        'resume',
        'descript',
        'category',
        'price',
        'image'
    ];


}
