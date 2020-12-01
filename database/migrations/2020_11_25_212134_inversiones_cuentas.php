<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InversionesCuentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inversiones_cuentas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('tipo_de_inversion');
            $table->foreign('tipo_de_inversion')->references('id')->on('tipo_inversiones');
            $table->unsignedBigInteger('descripcion_tipo_inversion');
            $table->foreign('descripcion_tipo_inversion')->references('id')->on('sub_tipo_inversiones');
            $table->unsignedBigInteger('titular_inversion');
            $table->foreign('titular_inversion')->references('id')->on('titular_inversiones');
            $table->unsignedBigInteger('tipo_de_tercero');
            $table->foreign('tipo_de_tercero')->references('id')->on('tipo_persona');
            $table->string('nombre_del_tercero')->nullable();
            $table->string('rfc_tercero')->nullable();
            $table->unsignedBigInteger('ubicacion_inversion');
            $table->foreign('ubicacion_inversion')->references('id')->on('ubicacion_inversion');
            $table->string('institucion_razon_social')->nullable();
            $table->unsignedBigInteger('pais_ubicacion_cuenta');
            $table->foreign('pais_ubicacion_cuenta')->references('id')->on('paises');
            $table->string('rfc_titular');
            $table->string('numero_cuenta_poliza');
            $table->unsignedBigInteger('tipo_de_moneda');
            $table->foreign('tipo_de_moneda')->references('id')->on('tipo_monedas');
            $table->double('saldo_a_la_fecha')->nullable();
            $table->string('aclaraciones_observaciones')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('inversiones_cuentas');
    }
}
