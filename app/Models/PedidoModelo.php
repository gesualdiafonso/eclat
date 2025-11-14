<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PedidoModelo extends Model
{
    use HasFactory;

    protected $fillable = ['pedido_id','modelo_id','quantity'];

    public function pedido()
    {
        return $this->belongsTo(Pedidos::class);
    }

    public function modelo()
    {
        return $this->belongsTo(Modelos::class);
    }
}
