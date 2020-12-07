<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdeudosPasivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adeudos_pasivos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('titular_adeudo_id');
            $table->foreign('titular_adeudo_id')->references('id')->on('titular_inversiones');
            $table->unsignedBigInteger('tipo_adeudo_id');
            $table->foreign('tipo_adeudo_id')->references('id')->on('tipo_adeudos');
            $table->string('especifique_adeudo')->nullable();
            $table->unsignedBigInteger('codeudor_id')->nullable();
            $table->foreign('codeudor_id')->references('id')->on('tipo_persona');
            $table->string('nombre_codeudor')->nullable();
            $table->string('rfc_codeudor')->nullable();
            $table->string('numero_cuenta');
            $table->date('fecha_adquisicion');
            $table->string('monto_adeudo');
            $table->string('tipo_moneda');
            $table->string('saldo_insoluto');
            $table->unsignedBigInteger('tipo_otorgante_id');
            $table->foreign('tipo_otorgante_id')->references('id')->on('tipo_persona');
            $table->string('nombre_otorgante')->nullable();
            $table->string('rfc_otorgante')->nullable();
            $table->string('institucion_otorgante')->nullable();
            $table->string('rfc_institucion')->nullable();
            $table->unsignedBigInteger('ubicacion_adeudo_id');
            $table->foreign('ubicacion_adeudo_id')->references('id')->on('lugares_ubicacion');
            $table->string('entidad_federativa')->nullable();
            $table->unsignedBigInteger('pais_id')->nullable();
            $table->foreign('pais_id')->references('id')->on('paises');
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
        Schema::dropIfExists('adeudos_pasivos');
    }
}
