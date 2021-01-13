<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpleoServidor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleo_servidor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->string("cargo");
            $table->string("nivel_cargo");
            $table->unsignedBigInteger("tipo_dependencia");
            $table->foreign("tipo_dependencia")->references("id")->on("tipo_dependencia");
            $table->unsignedBigInteger("tipo_direccion");
            $table->foreign("tipo_direccion")->references("id")->on("tipo_direccion");
            $table->unsignedBigInteger("tipo_departamento");
            $table->foreign("tipo_departamento")->references("id")->on("tipo_departamento");
            $table->unsignedBigInteger("honorarios");
            $table->foreign("honorarios")->references("id")->on("respuestas");
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
        Schema::dropIfExists('empleo_servidor');
    }
}
