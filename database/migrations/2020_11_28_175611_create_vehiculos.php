<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->bigInteger('vehiculosable_id')->nullable();
            $table->string('vehiculosable_type')->nullable();
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('tipoVehiculo_id');
            $table->foreign('tipoVehiculo_id')->references('id')->on('tipo_vehiculos');
            $table->string('otroVehiculo')->nullable();
            $table->unsignedBigInteger('titular_id')->nullable();
            $table->foreign('titular_id')->references('id')->on('titulares');
            $table->unsignedBigInteger('tipoPersonaTercero')->nullable();
            $table->foreign('tipoPersonaTercero')->references('id')->on('regimen_fiscal');
            $table->string('bieniTerceroNombreF')->nullable();
            $table->string('bieniTerceroNombreM')->nullable();
            $table->string('bieniTerceroRfcF')->nullable();
            $table->string('bieniTerceroRfcM')->nullable();
            $table->unsignedBigInteger('tipoDePersona');
            $table->foreign('tipoDePersona')->references('id')->on('regimen_fiscal');
            $table->string('v_nombreFisica')->nullable();
            $table->string('v_nombreMoral')->nullable();
            $table->string('v_rfcFisica')->nullable();
            $table->string('v_rfcMoral')->nullable();
            $table->unsignedBigInteger('relacion_id')->nullable();
            $table->foreign('relacion_id')->references('id')->on('relacion_transmisores');
            $table->string('v_marca')->nullable();
            $table->string('v_modelo')->nullable();
            $table->string('v_ano')->nullable();
            $table->string('v_num_serie')->nullable();
            $table->unsignedBigInteger('lugar_registro');
            $table->foreign('lugar_registro')->references('id')->on('lugar_donde_resides');
            $table->unsignedBigInteger('entidades_id')->nullable();
            $table->foreign('entidades_id')->references('id')->on('entidades');
            $table->unsignedBigInteger('pais_id')->nullable();
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->unsignedBigInteger('tipo_adquisicion_id')->nullable();
            $table->foreign('tipo_adquisicion_id')->references('id')->on('forma_adquisiciones');
            $table->unsignedBigInteger('pago_id')->nullable();
            $table->foreign('pago_id')->references('id')->on('forma_pagos');
            $table->string('v_valor')->nullable();
            $table->string('v_moneda')->nullable();
            $table->date('v_fecha')->nullable();
            $table->unsignedBigInteger('rf_dueno_titular_id')->nullable();
            $table->foreign('rf_dueno_titular_id')->references('id')->on('regimen_fiscal');
            $table->string('nombre_dueno')->nullable();
            $table->string('nombre_titular')->nullable();
            $table->string('rfc_dueno_titular')->nullable();
            $table->unsignedBigInteger('relacion_dueno_titular_id')->nullable();
            $table->foreign('relacion_dueno_titular_id')->references('id')->on('relacion_transmisores');
            $table->string('v_aclaraciones')->nullable();
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
        Schema::dropIfExists('vehiculos');
    }
}
