<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'razon_social', 'cuit', 'telefono', 'domicilio', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function categorias(){
        return $this->hasMany("App\Categoria");
    }

    public function proveedores(){
        return $this->hasMany("App\Proveedor");
    }

    public function productos(){
        return $this->hasMany("App\Producto");
    }

    public function pedidos(){
        return $this->hasMany("App\Pedido");
    }

    public function pedidoItems(){
        return $this->hasMany("App\PedidoItem");
    }

}
