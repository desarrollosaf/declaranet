<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("tipo_responsable_id");
            $table->string("especifique_otro_responsable")->nullable();
            $table->string("nombre_tercero");
            $table->bigInteger("tipo_tercero_id");
            $table->string("rfc_tercero");
            $table->string("monto_viaje");
            $table->bigInteger("tipo_moneda_id");
            $table->bigInteger("lugar_viaje_id");
            $table->bigInteger("motivo_viaje_id");
            $table->string("especifique_otro_motivo")->nullable();
            $table->string("observaciones_viajes")->nullable();
            $table->unsignedBigInteger('tipo_operacion_id')->default(1);
            $table->foreign('tipo_operacion_id')->references('id')->on('tipo_operaciones');
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
        Schema::dropIfExists('viajes');
    }
}
