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
            $table->string('tipo_de_inversion')->nullable();;
            $table->string('descripcion_tipo_inversion')->nullable();;
            $table->string('titular_inversion')->nullable();
            $table->string('tipo_de_tercero')->nullable();
            $table->string('nombre_del_tercero')->nullable();
            $table->string('rfc_tercero')->nullable();
            $table->string('ubicacion_inversion')->nullable();
            $table->string('institucion_razon_social')->nullable();
            $table->string('pais_ubicacion_cuenta')->nullable();
            $table->string('rfc_titular')->nullable();
            $table->string('numero_cuenta_poliza')->nullable();
            $table->string('tipo_de_moneda')->nullable();
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
