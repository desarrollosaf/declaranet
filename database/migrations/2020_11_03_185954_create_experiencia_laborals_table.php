<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaLaboralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias_laborales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('experienciable_id')->nullable();
            // Clase del objeto al que se está asignando la disponibilidad
            $table->string('experienciable_type')->nullable();
//            $table->index(['experienciable_id', 'experienciable_type']);
            $table->unsignedBigInteger("ambito_sector_id")->nullable();
            $table->foreign("ambito_sector_id")->references("id")->on("ambitos_sectores");
            $table->unsignedBigInteger("sector_id")->nullable();
            $table->foreign("sector_id")->references("id")->on("sectores");
            $table->unsignedBigInteger("nivel_orden_gobierno_id")->nullable();
            $table->foreign("nivel_orden_gobierno_id")->references("id")->on("nivel_orden_gobiernos");
            $table->unsignedBigInteger("ambito_publico_id")->nullable();
            $table->foreign("ambito_publico_id")->references("id")->on("ambito_publicos");
            $table->unsignedBigInteger("lugares_ubicacion_id")->nullable();
            $table->foreign("lugares_ubicacion_id")->references("id")->on("lugares_ubicacion");
            $table->string("nombre_empresa")->nullable();
            $table->string("rfc")->nullable();
            $table->string("area")->nullable();
            $table->string("puesto")->nullable();
            $table->date("fecha_egreso")->nullable();
            $table->date("fecha_ingreso")->nullable();
            $table->string("observaciones")->nullable();
            $table->string("ente_publico")->nullable();
            $table->string("area_adscripcion")->nullable();
            $table->string("cargo_comision")->nullable();
            $table->string("funcion_pricipal")->nullable();
            $table->string("especifique_otro_sector")->nullable();
            $table->integer("salario_mensual_neto")->nullable();
            $table->unsignedBigInteger("respuesta_proveedor_id")->nullable();
            $table->foreign("respuesta_proveedor_id")->references("id")->on("respuestas");
            $table->string("tipoOperacion")->nullable();
            $table->unsignedBigInteger("regimen_fiscal_id")->nullable();
            $table->foreign("regimen_fiscal_id")->references("id")->on("regimen_fiscal");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiencias_laborales');
    }
}
