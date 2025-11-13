<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Estilos extends Model
{
    protected $table = 'estilos';
    protected $primaryKey = 'estilos_id';

    protected $fillable = ['name'];

    public function modelos(): BelongsToMany
    {
        return $this->belongsToMany(
            Modelos::class,
            'estilos_modelos',
            'estilos_fk',   // chave local (na pivô)
            'modelos_fk',   // chave relacionada (na pivô)
            'estilos_id',   // chave primária local
            'id'            // chave primária relacionada
        );
    }
}
