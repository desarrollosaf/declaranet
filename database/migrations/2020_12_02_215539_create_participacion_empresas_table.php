<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipacionEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participacion_empresas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('titular_operacion_id')->nullable();
            $table->foreign('titular_operacion_id')->references('id')->on('titular_bienes');
            $table->string('nombre_empresa')->nullable();
            $table->string('rfc_empresa')->nullable();
            $table->integer('porcentaje')->nullable();
            $table->unsignedBigInteger('tipo_participacion_id');
            $table->foreign('tipo_participacion_id')->references('id')->on('tipo_participacions');
            $table->string('participacion_otro')->nullable();
            $table->unsignedBigInteger('tipo_respuesta_id');
            $table->foreign('tipo_respuesta_id')->references('id')->on('respuestas');
            $table->integer('monto_mensual')->nullable();
            $table->unsignedBigInteger('part_ubicacion_id');
            $table->foreign('part_ubicacion_id')->references('id')->on('lugares_ubicacion');
            $table->unsignedBigInteger('sector_productivo_id');
            $table->foreign('sector_productivo_id')->references('id')->on('sectores');
            $table->string('espec_sector')->nullable();
            $table->unsignedBigInteger('pais_id')->nullable();
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->unsignedBigInteger('entidad_id')->nullable();
            $table->foreign('entidad_id')->references('id')->on('entidades');
            $table->string('observaciones')->nullable();
            $table->unsignedBigInteger('relacion_transmisores_id')->nullable();
            $table->foreign('relacion_transmisores_id')->references('id')->on('relacion_transmisores');
            $table->unsignedBigInteger('tipo_sociedad_id')->nullable();
            $table->foreign('tipo_sociedad_id')->references('id')->on('tipo_sociedad');
            $table->string("especifique_sociedad")->nullable();
            $table->unsignedBigInteger('tipo_modalidad_id')->nullable();
            $table->foreign('tipo_modalidad_id')->references('id')->on('tipo_modalidad');
            $table->unsignedBigInteger('tipo_operaciones_id')->nullable();
            $table->foreign('tipo_operaciones_id')->references('id')->on('tipo_operaciones');
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
        Schema::dropIfExists('participacion_empresas');
    }
}
