<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServidorPublicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection("mysql2")->create('servidores_publicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre");
            $table->string("primer_apellido");
            $table->string("segundo_apellido")->nullable();
            $table->string("curp")->nullable();
            $table->string("rfc")->nullable();
            $table->string("homoclave")->nullable();
            $table->string("cargo")->nullable();
            $table->string("nivel_cargo")->nullable();
            $table->unsignedBigInteger("tipo_dependencia")->nullable();
            $table->foreign("tipo_dependencia")->references("id")->on("tipo_dependencia");
            $table->unsignedBigInteger("tipo_direccion")->nullable();
            $table->foreign("tipo_direccion")->references("id")->on("tipo_direccion");
            $table->unsignedBigInteger("tipo_departamento")->nullable();
            $table->foreign("tipo_departamento")->references("id")->on("tipo_departamento");
            $table->unsignedBigInteger("honorarios")->nullable();
            $table->foreign("honorarios")->references("id")->on("honorario");
            $table->string("c_institucional")->nullable();
            $table->string("c_personal")->nullable();
            $table->integer("telefono_casa")->nullable();
            $table->integer("celular")->nullable();
            $table->string("nacionalidad")->nullable();
            $table->string("observaciones")->nullable();
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
        Schema::dropIfExists('servidores_publicos');
    }
}
