<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donativos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('tipo_donativos_id');
            $table->foreign('tipo_donativos_id')->references('id')->on('tipo_donativos');
            $table->unsignedBigInteger('titular_id');
            $table->foreign('titular_id')->references('id')->on('tipo_titular_donativos');
            $table->string("especifique_dependiente")->nullable();
            $table->string("especifique_fundacion")->nullable();
            $table->unsignedBigInteger('forma_recepcion_id');
            $table->foreign('forma_recepcion_id')->references('id')->on('forma_recepcion_donativos');
            $table->string("especifique_otro")->nullable();
            $table->string("especifique_donativo")->nullable();
            $table->double("monto_donativo")->nullable();
            $table->unsignedBigInteger('tipo_mondeda_id');
            $table->foreign('tipo_mondeda_id')->references('id')->on('tipo_monedas');
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
        Schema::dropIfExists('donativos');
    }
}
