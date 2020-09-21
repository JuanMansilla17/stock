<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable=["razon_social", "telefono", "mail", "user_id"];

    //especifica el nombre de la tabla porque no reconoce el plural de "proveedor"
    protected $table = 'proveedores';
}
