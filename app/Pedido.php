<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        "fecha",
        "proveedor_id",
        "costo_total"
    ];

    public function pedido_items(){
        return $this->hasMany("App\PedidoItem");
    }
}
