<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCambioDatosEncargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambio_datos_encargos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id')->nullable();
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->text('cargo_concluye')->nullable();
            $table->date('fecha_conclusion')->nullable();
            $table->unsignedBigInteger('ente_publicos_id')->nullable();
            $table->foreign('ente_publicos_id')->references('id')->on('ente_publicos');
            $table->text('dependencia')->nullable();
            $table->text('unidad_administrativa')->nullable();
            $table->text('cargo_inicia')->nullable();
            $table->text('nombre_cargo_inicia')->nullable();
            $table->unsignedBigInteger('honorarios')->nullable();
            $table->foreign('honorarios')->references('id')->on('respuestas');
            $table->text('nivel_encargo')->nullable();
            $table->text('adscripcion_inicia')->nullable();
            $table->date('fecha_inicio_encargo')->nullable();
            $table->text('calle')->nullable();
            $table->text('no_exterior')->nullable();
            $table->text('no_interior_piso')->nullable();
            $table->text('localidad')->nullable();
            $table->unsignedBigInteger('entidades_id')->nullable();
            $table->foreign('entidades_id')->references('id')->on('entidades');
            $table->text('municipio_id')->nullable();
            $table->text('codigo_postal')->nullable();
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
        Schema::dropIfExists('cambio_datos_encargos');
    }
}
