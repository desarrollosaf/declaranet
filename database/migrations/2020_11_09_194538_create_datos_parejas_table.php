<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosParejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_parejas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->string("nombre");
            $table->string("primer_apellido");
            $table->string("segundo_apellido")->nullable();
            $table->date("fecha_nacimiento");
            $table->string("rfc_pareja")->nullable();
            $table->unsignedBigInteger("relacion_id");
            $table->foreign("relacion_id")->references("id")->on("relacion_con_declarantes");
            $table->unsignedBigInteger("ciudadano_id");
            $table->foreign("ciudadano_id")->references("id")->on("extranjeros");
            $table->string("curp")->nullable();
            $table->unsignedBigInteger("respuesta_dependiente_id");
            $table->foreign("respuesta_dependiente_id")->references("id")->on("respuestas");
            $table->unsignedBigInteger("respuesta_domicilio_id");
            $table->foreign("respuesta_domicilio_id")->references("id")->on("respuestas");
            $table->unsignedBigInteger("lugar_reside_id")->nullable();
            $table->foreign("lugar_reside_id")->references("id")->on("lugar_donde_resides");
            $table->string("observaciones")->nullable();
            $table->unsignedBigInteger('tipo_operacion_id')->default(1);
            $table->foreign('tipo_operacion_id')->references('id')->on('tipo_operaciones');
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
        Schema::dropIfExists('datos_parejas');
    }
}
