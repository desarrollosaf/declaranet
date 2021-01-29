<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApoyoBeneficio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoyo_beneficio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger("tipo_operacion_id")->nullable();
            $table->foreign("tipo_operacion_id")->references('id')->on("tipo_operaciones");
            $table->unsignedBigInteger('titular_apoyo_id');
            $table->foreign('titular_apoyo_id')->references('id')->on('parentesco_relaciones');
            $table->string('especifique_titular')->nullable();
            $table->string('nombre_programa');
            $table->string('nombre_institucion');
            $table->unsignedBigInteger('nivel_orden_gobierno_id');
            $table->foreign('nivel_orden_gobierno_id')->references('id')->on('nivel_orden_gobiernos');
            $table->unsignedBigInteger('tipo_apoyo_id');
            $table->foreign('tipo_apoyo_id')->references('id')->on('tipo_apoyos');
            $table->string('especifique_apoyo')->nullable();
            $table->unsignedBigInteger('forma_recepcion_id');
            $table->foreign('forma_recepcion_id')->references('id')->on('forma_recepciones');
            $table->string('especifique_especie')->nullable();
            $table->unsignedBigInteger('tipo_de_moneda_id')->nullable();
            $table->foreign('tipo_de_moneda_id')->references('id')->on('tipo_monedas');
            $table->integer('monto_mensual');
            $table->string('aclaraciones_observaciones')->nullable();
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
        Schema::dropIfExists('apoyo_beneficio');
    }
}
