<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBienesinmuebles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienes_inmuebles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('inmuebleable_id');
            $table->string('inmuebleable_type');
            $table->unsignedBigInteger('tipo_inmueble_id')->nullable();
            $table->foreign('tipo_inmueble_id')->references('id')->on('tipo_inmuebles');
            $table->unsignedBigInteger('titular_id')->nullable();
            $table->foreign('titular_id')->references('id')->on('titulares');
            $table->unsignedBigInteger('tipo_tercero_id')->nullable();
            $table->foreign('tipo_tercero_id')->references('id')->on('regimen_fiscal');
            $table->string('nombre_razon_tercero')->nullable();
            $table->string('rfc_tercero')->nullable();
            $table->string('porcentaje_propiedad')->nullable();
            $table->string('superficie_terreno')->nullable();
            $table->string('superficie_construccion')->nullable();
            $table->unsignedBigInteger('forma_adquisicion_id')->nullable();
            $table->foreign('forma_adquisicion_id')->references('id')->on('forma_adquisiciones');
            $table->unsignedBigInteger('forma_pago_id')->nullable();
            $table->foreign('forma_pago_id')->references('id')->on('forma_pagos');
            $table->unsignedBigInteger('tipo_transmisor_id')->nullable();
            $table->foreign('tipo_transmisor_id')->references('id')->on('regimen_fiscal');
            $table->string('nombre_razon_transmisor')->nullable();
            $table->string('rfc_transmisor')->nullable();
            $table->unsignedBigInteger('relacion_transmisor_id')->nullable();
            $table->foreign('relacion_transmisor_id')->references('id')->on('relacion_transmisores');
            $table->string('valor_adquisicion')->nullable();
            $table->unsignedBigInteger('valor_conforme_id')->nullable();
            $table->foreign('valor_conforme_id')->references('id')->on('valor_conforme_a_s');
            $table->string('tipo_moneda')->nullable();
            $table->date('fecha_adquisicion')->nullable();
            $table->string('datos_registro')->nullable();
            $table->unsignedBigInteger('ubicacion_inmueble_id')->nullable();
            $table->foreign('ubicacion_inmueble_id')->references('id')->on('lugares_ubicacion');
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('bienes_inmuebles');
    }
}
