<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipacionDeclaracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participacion_declaraciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("declaracion_id");
            $table->foreign("declaracion_id")->references("id")->on("declaraciones");
            $table->string("nombre");
            $table->string("primer_apellido");
            $table->string("segundo_apellido")->nullable();
            $table->date("fecha_nacimiento")->nullable();
            $table->string("rfc")->nullable();
            $table->unsignedBigInteger("tipo_titular_donativo_id");
            $table->foreign("tipo_titular_donativo_id")->references("id")->on("tipo_titular_donativos");
            $table->unsignedBigInteger("institucion_participacion_id");
            $table->foreign("institucion_participacion_id")->references("id")->on("tipo_instituciones");
            $table->unsignedBigInteger("tipo_participacion_id");
            $table->foreign("tipo_participacion_id")->references("id")->on("tipo_participacions");
            $table->integer("frecuencia_anual");
            $table->unsignedBigInteger("tipo_organizacion_id");
            $table->foreign("tipo_organizacion_id")->references("id")->on("tipo_organizaciones_comunitarias");
            $table->unsignedBigInteger("tipo_colaboracion_id");
            $table->foreign("tipo_colaboracion_id")->references("id")->on("tipo_colaboraciones");
            $table->text("observaciones")->nullable();
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
        Schema::dropIfExists('participacion_declaraciones');
    }
}
