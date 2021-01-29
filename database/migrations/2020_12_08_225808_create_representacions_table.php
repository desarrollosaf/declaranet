<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('titular_id');
            $table->foreign('titular_id')->references('id')->on('titular_bienes');
            $table->unsignedBigInteger('tipo_representacion_id');
            $table->foreign('tipo_representacion_id')->references('id')->on('tipo_representaciones');
            $table->date('fecha_representacion')->nullable();
            $table->unsignedBigInteger('regimen_representante_id');
            $table->foreign('regimen_representante_id')->references('id')->on('regimen_fiscal');
            $table->string('nombre_representante')->nullable();
            $table->string('rfc_representante')->nullable();
            $table->unsignedBigInteger('respuesta_id');
            $table->foreign('respuesta_id')->references('id')->on('respuestas');
            $table->integer('monto_mensual')->nullable();
            $table->unsignedBigInteger('tipo_sector_id');
            $table->foreign('tipo_sector_id')->references('id')->on('sectores');
            $table->string('especifique')->nullable();
            $table->unsignedBigInteger('lugar_ubica_id');
            $table->foreign('lugar_ubica_id')->references('id')->on('lugares_ubicacion');
            $table->string('entidad_federativa')->nullable();
            $table->unsignedBigInteger('entidad_id')->nullable();
            $table->foreign('entidad_id')->references('id')->on('entidades');
            $table->unsignedBigInteger('pais_id')->nullable();
            $table->foreign('pais_id')->references('id')->on('paises');
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
        Schema::dropIfExists('representaciones');
    }
}
