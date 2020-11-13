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
            $table->string("rfc")->nullable();
            $table->unsignedBigInteger("relacion_id");
            $table->foreign("relacion_id")->references("id")->on("relacion_con_declarantes");
            $table->unsignedBigInteger("ciudadano_id");
            $table->foreign("ciudadano_id")->references("id")->on("extranjeros");
            $table->string("curp")->nullable();
            $table->boolean("dependiente_economico");
            $table->boolean("mismo_domicilio");
            $table->unsignedBigInteger("lugar_reside_id");
            $table->foreign("lugar_reside_id")->references("id")->on("lugar_donde_resides");
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
