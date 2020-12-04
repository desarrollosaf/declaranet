<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBienesMueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienes_muebles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('titular_bien_id');
            $table->foreign('titular_bien_id')->references('id')->on('titular_bienes');
            $table->unsignedBigInteger('tipo_bien_id');
            $table->foreign('tipo_bien_id')->references('id')->on('tipo_bien_bienes_muebles');
            $table->string('especifique')->nullable();
            $table->string('descripcion_bien')->nullable();
            $table->unsignedBigInteger('tipo_tercero_id')->nullable();
            $table->foreign('tipo_tercero_id')->references('id')->on('regimen_fiscal');
            $table->string('nombre_tercero')->nullable();
            $table->string('denominacion_razon')->nullable();
            $table->string('rfc_tercero')->nullable();
            $table->unsignedBigInteger('transmisor_propiedad_id');
            $table->foreign('transmisor_propiedad_id')->references('id')->on('regimen_fiscal');
            $table->string('nombre_transmisor')->nullable();
            $table->string('denominacion_rs_transmisor')->nullable();
            $table->string('rfc_transmisor')->nullable();
            $table->unsignedBigInteger('relacion_transmisor_id');
            $table->foreign('relacion_transmisor_id')->references('id')->on('relacion_transmisores');
            $table->string('especifique_relacion_transmisor')->nullable();
            $table->unsignedBigInteger('forma_adquisicion_id');
            $table->foreign('forma_adquisicion_id')->references('id')->on('forma_adquisiciones');
            $table->unsignedBigInteger('forma_pago_id');
            $table->foreign('forma_pago_id')->references('id')->on('forma_pagos');
            $table->string('valor_adquisicion')->nullable();
            $table->unsignedBigInteger('tipo_moneda_id');
            $table->foreign('tipo_moneda_id')->references('id')->on('tipo_monedas');
            $table->date("fecha_adquisicion")->nullable();
            $table->string("aclaraciones", 240)->nullable();
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
        Schema::dropIfExists('bienes_muebles');
    }
}
