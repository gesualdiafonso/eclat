<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function modelos()
    {
        return $this->hasMany(PedidoModelo::class);
    }

    public function servicios()
    {
        return $this->hasMany(PedidoServicio::class);
    }
}
