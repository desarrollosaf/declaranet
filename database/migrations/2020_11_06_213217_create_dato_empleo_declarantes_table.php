<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatoEmpleoDeclarantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dato_empleo_declarantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('nivel_gobierno_id')->nullable();
            $table->foreign('nivel_gobierno_id')->references('id')->on('nivel_orden_gobiernos');
            $table->unsignedBigInteger('ambito_publico_id')->nullable();
            $table->foreign('ambito_publico_id')->references('id')->on('ambito_publicos');
            $table->string('nombre_ente_publico')->nullable()->nullable();
            $table->string('area_adscripcion')->nullable()->nullable();
            $table->string('empleo_cargo')->nullable();
            $table->string('honorarios')->nullable();
            $table->string('nivel_empleo')->nullable();
            $table->string('funcion_principal')->nullable();
            $table->date('fecha_posecion_empleo')->nullable();
            $table->string('telefono_oficina')->nullable();
            $table->string('extension')->nullable();
            $table->string('calle')->nullable();
            $table->string('numero_exterior')->nullable();
            $table->string('numero_interior_piso')->nullable();
            $table->string('colonia_localidad')->nullable();
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->unsignedBigInteger('entidad_federativa_id')->nullable();
            $table->foreign('entidad_federativa_id')->references('id')->on('entidades');
            $table->string('codigo_postal')->nullable();
            $table->string('aclaraciones')->nullable();
            $table->string("tipoOperacion")->nullable();
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
        Schema::dropIfExists('dato_empleo_declarantes');
    }
}
