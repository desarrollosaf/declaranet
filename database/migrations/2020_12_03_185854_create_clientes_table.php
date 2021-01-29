<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('respuestas_id');
            $table->foreign('respuestas_id')->references('id')->on('respuestas');
            $table->unsignedBigInteger('tipo_relaciones_id')->nullable();
            $table->foreign('tipo_relaciones_id')->references('id')->on('tipo_relaciones');
            $table->string('nombre_empresa')->nullable();
            $table->string('rfc')->nullable();
            $table->unsignedBigInteger('regimen_fiscal_id')->nullable();
            $table->foreign('regimen_fiscal_id')->references('id')->on('regimen_fiscal');
            $table->string('nombre_cliente')->nullable();
            $table->string('rfc_cliente')->nullable();
            $table->string('nombre_cliente_moral')->nullable();
            $table->string('rfc_cliente_moral')->nullable();
            $table->unsignedBigInteger('sectores_id')->nullable();
            $table->foreign('sectores_id')->references('id')->on('sectores');
            $table->string('sector_especifique')->nullable();
            $table->integer('monto_beneficio')->nullable();
            $table->unsignedBigInteger('lugar_donde_resides_id')->nullable();
            $table->foreign('lugar_donde_resides_id')->references('id')->on('lugar_donde_resides');
            $table->unsignedBigInteger('entidades_id')->nullable();
            $table->foreign('entidades_id')->references('id')->on('entidades');
            $table->unsignedBigInteger('paises_id')->nullable();
            $table->foreign('paises_id')->references('id')->on('paises');
            $table->string('aclaraciones')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
