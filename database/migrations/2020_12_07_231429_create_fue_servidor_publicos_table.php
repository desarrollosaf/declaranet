<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFueServidorPublicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fue_servidor_publicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->boolean("fue_servidor_publico")->nullable()->default(false);
            $table->date("fecha_inicio")->nullable();
            $table->date("fecha_conclusion")->nullable();
            $table->double("remuneracion_neta")->nullable();
            $table->double("otros_ingresos_total")->nullable();
            $table->double("ingreso_por_actividad_ice")->nullable();
            $table->string("nombre_razon_social")->nullable();
            $table->string("tipo_de_negocio")->nullable();
            $table->double("ingreso_por_actividad_financiera")->nullable();
            $table->unsignedBigInteger("tipo_de_instrumento_id")->nullable();
            $table->foreign('tipo_de_instrumento_id')->references('id')->on('tipo_instrumentos');
            $table->string("especifique_instrumento")->nullable();
            $table->double("ingreso_por_servicios_profesionales")->nullable();
            $table->string("tipo_de_servicio")->nullable();
            $table->double("ingreso_por_enajenacion_bienes")->nullable();
            $table->string("tipo_de_bien_id")->nullable();
            $table->double("ingreso_otros_no_considerados")->nullable();
            $table->string("tipo_de_ingreso_no_considerado")->nullable();
            $table->double("ingreso_neto")->nullable();
            $table->double("ingreso_neto_pareja")->nullable();
            $table->double("total_ingresos_declarante_pareja")->nullable();
            $table->string("observaciones", 240)->nullable();
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
        Schema::dropIfExists('fue_servidor_publicos');
    }
}
