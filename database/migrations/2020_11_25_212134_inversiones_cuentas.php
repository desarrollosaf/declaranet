<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InversionesCuentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inversiones_cuentas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger("tipo_operacion_id")->nullable();
            $table->foreign("tipo_operacion_id")->references('id')->on("tipo_operaciones");
            $table->unsignedBigInteger('tipo_de_inversion_id');
            $table->foreign('tipo_de_inversion_id')->references('id')->on('tipo_inversiones');
            $table->unsignedBigInteger('descripcion_tipo_inversion_id');
            $table->foreign('descripcion_tipo_inversion_id')->references('id')->on('sub_tipo_inversiones');
            $table->unsignedBigInteger('titular_inversion_id');
            $table->foreign('titular_inversion_id')->references('id')->on('titular_inversiones');
            $table->unsignedBigInteger('tipo_de_tercero_id')->nullable();
            $table->foreign('tipo_de_tercero_id')->references('id')->on('tipo_persona');
            $table->string('nombre_del_tercero')->nullable();
            $table->string('rfc_tercero')->nullable();
            $table->unsignedBigInteger('ubicacion_inversion_id');
            $table->foreign('ubicacion_inversion_id')->references('id')->on('ubicacion_inversion');
            $table->string('institucion_razon_social')->nullable();
            $table->unsignedBigInteger('pais_ubicacion_cuenta_id')->nullable();
            $table->foreign('pais_ubicacion_cuenta_id')->references('id')->on('paises');
            $table->string('rfc_titular')->nullable();
            $table->string('numero_cuenta_poliza');
            $table->unsignedBigInteger('tipo_de_moneda_id');
            $table->foreign('tipo_de_moneda_id')->references('id')->on('tipo_monedas');
            $table->double('saldo_a_la_fecha')->nullable();
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
        Schema::dropIfExists('inversiones_cuentas');
    }
}
