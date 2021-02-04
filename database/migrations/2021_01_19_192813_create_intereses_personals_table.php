<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteresesPersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intereses_personals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->string("nombre");
            $table->string("primer_apellido");
            $table->string("segundo_apellido");
            $table->date("fecha_nacimiento");
            $table->string("rfc");
            $table->unsignedBigInteger('parentesco_relaciones_id');
            $table->foreign('parentesco_relaciones_id')->references('id')->on('parentesco_relaciones');
            $table->unsignedBigInteger('respuestas_id');
            $table->foreign('respuestas_id')->references('id')->on('respuestas');
            $table->string("curp")->nullable();
            $table->string("observaciones", 500)->nullable();
            $table->unsignedBigInteger('tipo_operacion_id')->default(1);
            $table->foreign('tipo_operacion_id')->references('id')->on('tipo_operaciones');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intereses_personals');
    }
}
