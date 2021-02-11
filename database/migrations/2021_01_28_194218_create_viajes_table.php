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
            $table->string("nombre_pariente");
            $table->string("primer_apellido");
            $table->string("segundo_apellido");
            $table->date("cumpleaños_pariente");
            $table->string("rfc_pariente");
            $table->bigInteger("tipo_responsable_id");
            $table->string("especifique_otro_responsable")->nullable();
            $table->bigInteger("tipo_tercero_id");
            $table->string("nombre_tercero")->nullable();
            $table->bigInteger("razon_social_tercero")->nullable();
            $table->string("rfc_tercero");
            $table->bigInteger("ambito_tercero_id")->nullable();
            $table->string("especifique_ambito")->nullable();
            $table->bigInteger("nivel_gobierno_id")->nullable();
            $table->string("nombre_ente_publico_id")->nullable();
            $table->string("nombre_adscripcion")->nullable();
            $table->string("empleo_cargo")->nullable();
            $table->bigInteger("sector_productivo_id")->nullable();
            $table->string("especifique_sector")->nullable();
            $table->bigInteger("lugar_viaje_id");
            $table->bigInteger("motivo_viaje_id");
            $table->string("especifique_otro_motivo")->nullable();
            $table->Integer("monto_viaje");
            $table->bigInteger("tipo_moneda_id");
            $table->string("observaciones_viajes")->nullable();
            $table->unsignedBigInteger("declaracion_id");
            $table->foreign("declaracion_id")->references("id")->on("declaraciones");
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
