<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOperacionExperienciaLaboral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experiencias_laborales', function (Blueprint $table) {
            $table->unsignedBigInteger('tipo_operacion_id')->default(1);
            $table->foreign('tipo_operacion_id')->references('id')->on('tipo_operaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experiencias_laborales', function (Blueprint $table) {
            $table->dropColumn('tipo_operacion_id');
        });
    }
}
