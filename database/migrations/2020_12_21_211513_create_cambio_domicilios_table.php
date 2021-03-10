<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCambioDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambio_domicilios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id')->nullable();
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('lugares_ubicacion_id')->nullable();
            $table->foreign('lugares_ubicacion_id')->references('id')->on('lugares_ubicacion');
            $table->text('calle')->nullable();
            $table->text('num_ext')->nullable();
            $table->text('num_int')->nullable();
            $table->text('colonia')->nullable();
            $table->unsignedBigInteger('entidad_federativa_id')->nullable();
            $table->foreign('entidad_federativa_id')->references('id')->on('entidades');
            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->text('codigo_postal')->nullable();
            $table->text('telefono_particular')->nullable();
            $table->text('telefono_personal')->nullable();
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
        Schema::dropIfExists('cambio_domicilios');
    }
}
