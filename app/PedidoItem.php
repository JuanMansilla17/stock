<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    protected $fillable = [
        "cantidad",
        "costo",
        "pedido_id",
        "producto_id",
        "user_id"
    ];

    public function pedido(){
        return $this->belongsTo('App\Pedido');
    }

    public function producto(){
        return $this->belongsTo('App\Producto');
    }
}
