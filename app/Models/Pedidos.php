<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

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
        return $this->hasMany(PedidoModelo::class, 'pedido_id');
    }

    public function servicios()
    {
        return $this->hasMany(PedidoServicio::class , 'pedido_id');
    }
}
