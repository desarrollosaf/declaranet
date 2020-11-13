<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependientes', function (Blueprint $table) {
             $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('nivel_gobierno_id');
            $table->foreign('nivel_gobierno_id')->references('id')->on('nivel_orden_gobiernos');
            $table->unsignedBigInteger('ambito_publico_id');
            $table->foreign('ambito_publico_id')->references('id')->on('ambito_publicos');
            $table->string('nombre_ente_publico')->nullable();
            $table->string('area_adscripcion')->nullable();
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
            $table->string('municipio')->nullable();
            $table->string('entidad_federativa')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('aclaraciones')->nullable();
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
        Schema::dropIfExists('dependientes');
    }
}
