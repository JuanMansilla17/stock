<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_barras')->unique();
            $table->string("descripcion")->nullable($value = false);
            $table->float('costo_compra')->nullable($value = false);
            $table->float('precio_venta')->nullable($value = false);
            $table->integer('existencia')->nullable($value = false);
            $table->integer('stock_minimo')->nullable($value = false);
            $table->foreignId('user_id');
            $table->foreignId('categoria_id');
            $table->foreignId('proveedor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
