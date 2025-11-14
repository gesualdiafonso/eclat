<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoServicio extends Model
{
    use HasFactory;

    protected $table = 'pedidos_servicio';

    protected $fillable = ['pedido_id','servicio_id','quantity'];

    public function pedido()
    {
        return $this->belongsTo(Pedidos::class , 'pedido_id');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class , 'servicio_id');
    }
}
