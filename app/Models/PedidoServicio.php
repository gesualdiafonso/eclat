<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoServicio extends Model
{
    use HasFactory;

    protected $fillable = ['pedido_id','servico_id','quantity'];

    public function pedido()
    {
        return $this->belongsTo(Pedidos::class);
    }

    public function servico()
    {
        return $this->belongsTo(Servicio::class);
    }
}
