<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCambioDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambio_dependencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id')->nullable();
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->text('nombre')->nullable();
            $table->text('apellidop')->nullable();
            $table->text('apellidom')->nullable();
            $table->text('curp')->nullable();
            $table->text('rfc')->nullable();
            $table->text('homoclave')->nullable();
            $table->text('correo_institucional')->nullable();
            $table->text('correo_personal')->nullable();
            $table->text('numero_oficina')->nullable();
            $table->text('ext')->nullable();
            $table->text('numero_celular')->nullable();
            $table->unsignedBigInteger('situacion_personal_id')->nullable();
            $table->foreign('situacion_personal_id')->references('id')->on('situaciones_personales');
            $table->unsignedBigInteger('regimen_matrimonial_id')->nullable();
            $table->foreign('regimen_matrimonial_id')->references('id')->on('regimen_matrimoniales');
            $table->text('nacionalidad')->nullable();
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
        Schema::dropIfExists('cambio_dependencias');
    }
}
