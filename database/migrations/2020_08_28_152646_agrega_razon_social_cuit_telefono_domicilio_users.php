<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregaRazonSocialCuitTelefonoDomicilioUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("razon_social")->nullable($value = false);
            $table->string("cuit")->nullable($value = false);
            $table->string("telefono")->nullable($value = false);
            $table->string("domicilio")->nullable($value = false);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
