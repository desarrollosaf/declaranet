<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatoCurricularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_curriculares', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('curricular_id');
            $table->string('curricular_type');
            $table->unsignedBigInteger("nivel_id")->nullable();
            $table->foreign("nivel_id")->references("id")->on("niveles");
            $table->string("institucion_educativa");
            $table->string("carrera_area")->nullable();
            $table->unsignedBigInteger("estatus_id");
            $table->foreign("estatus_id")->references("id")->on("estatus");
            $table->unsignedBigInteger("documento_id")->nullable();
            $table->foreign("documento_id")->references("id")->on("documentos_obtenidos");
            $table->date("fecha_documento")->nullable();
            $table->unsignedBigInteger("lugar_ubicacion_id");
            $table->foreign("lugar_ubicacion_id")->references("id")->on("lugares_ubicacion");
            $table->string("observaciones")->nullable();
            $table->index(['curricular_id', 'curricular_type']);
            $table->unsignedBigInteger("tipo_operaciones_id")->nullable();
            $table->foreign("tipo_operaciones_id")->references("id")->on("tipo_operaciones");
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
        Schema::dropIfExists('datos_curriculares');
    }
}
