<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Modelos extends Model
{
    protected $table = 'modelos';
    protected $primaryKey = 'id';

    protected $fillable = [
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
        'campana',
    ];

    public function estilos(): BelongsToMany
    {
        return $this->belongsToMany(
            Estilos::class,       // modelo relacionado
            'estilos_modelos',    // tabela pivô
            'modelos_fk',         // chave local (tabela pivô -> modelos)
            'estilos_fk',         // chave relacionada (tabela pivô -> estilos)
            'id',                 // chave primária local
            'estilos_id'          // chave primária relacionada
        );
    }
}
