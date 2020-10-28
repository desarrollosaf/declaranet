<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
            $table->string("calle");
            $table->string("num_ext");
            $table->string("num_int")->nullable();
            $table->unsignedBigInteger("asentamiento_id")->nullable();
            $table->unsignedBigInteger("entidad_id")->nullable();
            $table->unsignedBigInteger("municipio_id")->nullable();
            $table->foreign("asentamiento_id")->references("id")->on("asentamientos");
            $table->foreign("entidad_id")->references("id")->on("entidades");
            $table->foreign("municipio_id")->references("id")->on("municipios");
            $table->string("codigo_postal");
            $table->string("aclaraciones");
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
        Schema::dropIfExists('domicilios');
    }
}
