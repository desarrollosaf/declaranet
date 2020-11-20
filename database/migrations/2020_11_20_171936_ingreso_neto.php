<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IngresoNeto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos_netos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->double('ingreso_mensual_publico');
            $table->double('ingreso_por_actividad_ice')->nullable();;
            $table->string('nombre_razon_social')->nullable();
            $table->string('tipo_de_negocio')->nullable();
            $table->double('ingreso_por_actividad_financiera')->nullable();
            $table->string('tipo_de_instrumento')->nullable();
            $table->double('ingreso_por_servicios_profesionales')->nullable();
            $table->string('tipo_de_servicio')->nullable();
            $table->double('ingreso_otros')->nullable();
            $table->string('tipo_de_ingreso')->nullable();
            $table->double('ingreso_mensual_neto');
            $table->double('ingreso_mensual_neto_pareja')->nullable();
            $table->double('total_ingresos_declarante_pareja')->nullable();
            $table->string('aclaraciones_observaciones')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos_netos');
    }
}
