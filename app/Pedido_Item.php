<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido_Item extends Model
{
    protected $fillable = [
        "cantidad",
        "costo",
        "pedido_id",
        "producto_id"
    ];
}
