<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable=[
        "codigo_barras", 
        "descripcion", 
        "costo_compra", 
        "precio_venta", 
        "existencia", 
        "stock_minimo", 
        "user_id", 
        "categoria_id", 
        "proveedor_id"
    ];
}
