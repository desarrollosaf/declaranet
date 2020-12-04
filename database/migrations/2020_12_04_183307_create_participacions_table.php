<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('tipo_relaciones_id')->nullable();
            $table->foreign('tipo_relaciones_id')->references('id')->on('tipo_relaciones');
            $table->unsignedBigInteger('tipo_instituciones_id')->nullable();
            $table->foreign('tipo_instituciones_id')->references('id')->on('tipo_instituciones');
            $table->text('especifique_institucion')->nullable();
            $table->text('nombre_institucion')->nullable();
            $table->text('rfc')->nullable();
            $table->text('puesto_rol')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->text('remuneracion')->nullable();
            $table->text('monto_mensual')->nullable();
            $table->unsignedBigInteger('lugares_ubicacion_id')->nullable();
            $table->foreign('lugares_ubicacion_id')->references('id')->on('lugares_ubicacion');
            $table->text('entidad_federativa')->nullable();
            $table->unsignedBigInteger('paises_id')->nullable();
            $table->foreign('paises_id')->references('id')->on('paises');
            $table->text('aclaraciones')->nullable();
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
        Schema::dropIfExists('participacions');
    }
}
