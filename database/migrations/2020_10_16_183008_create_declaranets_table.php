<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclaranetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaraciones', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("servidor_publico_id");
            $table->unsignedBigInteger('tipo_movimiento_id');
            $table->foreign('tipo_movimiento_id')->references("id")->on('tipo_movimientos');
            $table->date('fecha_declaracion');
            $table->string("correo_institucional");
            $table->string("correo_personal");
            $table->double("telefono_casa");
            $table->double("telefono_personal");
            $table->unsignedBigInteger("situacion_personal_id");
            $table->foreign("situacion_personal_id")->references("id")->on("situaciones_personales");
            $table->unsignedBigInteger("regimen_matrimonial_id");
            $table->foreign("regimen_matrimonial_id")->references("id")->on("situaciones_personales");
            $table->boolean("honorarios")->nullable();
            $table->unsignedBigInteger("pais_id");
            $table->foreign("pais_id")->references("id")->on("paises");
            $table->string("nacionalidad");
            $table->string("observaciones")->nullable();
            $table->unsignedBigInteger("estatus_declaracion_id");
            $table->foreign("estatus_declaracion_id")->references("id")->on("estatus_declaraciones");
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
        Schema::dropIfExists('declaraciones');
    }
}
