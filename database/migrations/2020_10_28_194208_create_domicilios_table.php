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
            $table->bigInteger('domiciliable_id');
            $table->string('domiciliable_type');
            $table->string("calle")->nullable();
            $table->string("num_ext")->nullable();
            $table->string("num_int")->nullable();
            $table->unsignedBigInteger("asentamiento_id")->nullable();
            $table->unsignedBigInteger("entidad_id")->nullable();
            $table->unsignedBigInteger("municipio_id")->nullable();
            $table->string("municipio")->nullable();
            $table->unsignedBigInteger("pais_id")->nullable();
            $table->string("pais")->nullable();
            $table->foreign("asentamiento_id")->references("id")->on("asentamientos");
            $table->foreign("entidad_id")->references("id")->on("entidades");
            $table->string("entidad")->nullable();
            $table->foreign("municipio_id")->references("id")->on("municipios");
            $table->string("codigo_postal")->nullable();
            $table->string("observaciones")->nullable();
            $table->string("colonia")->nullable();
            $table->index(['domiciliable_id', 'domiciliable_type']);
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
        Schema::dropIfExists('domicilios');
    }
}
