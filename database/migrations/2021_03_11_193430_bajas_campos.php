<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BajasCampos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bienes_inmuebles', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_bajas_id')->nullable();
            $table->foreign('motivo_bajas_id')->references('id')->on('motivo_bajas');
            $table->text('motivo_baja')->nullable();
        });
        Schema::table('datos_curriculares', function (Blueprint $table) {
            $table->text('motivo_baja')->nullable();
        });
        Schema::table('experiencias_laborales', function (Blueprint $table) {
            $table->text('motivo_baja')->nullable();
        });
        Schema::table('dependientes_economicos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_bajas_id')->nullable();
            $table->foreign('motivo_bajas_id')->references('id')->on('motivo_bajas');
            $table->text('motivo_baja')->nullable();
        });
        Schema::table('participacions', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_bajas_id')->nullable();
            $table->foreign('motivo_bajas_id')->references('id')->on('motivo_bajas');
            $table->text('motivo_baja')->nullable();
        });
        Schema::table('beneficios_privados', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_bajas_id')->nullable();
            $table->foreign('motivo_bajas_id')->references('id')->on('motivo_bajas');
            $table->text('motivo_baja')->nullable();
        });
        Schema::table('fideicomisos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_bajas_id')->nullable();
            $table->foreign('motivo_bajas_id')->references('id')->on('motivo_bajas');
            $table->text('motivo_baja')->nullable();
        });
        Schema::table('donativos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_bajas_id')->nullable();
            $table->foreign('motivo_bajas_id')->references('id')->on('motivo_bajas');
            $table->text('motivo_baja')->nullable();
        });
        Schema::table('intereses_personals', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_bajas_id')->nullable();
            $table->foreign('motivo_bajas_id')->references('id')->on('motivo_bajas');
            $table->text('motivo_baja')->nullable();
        });
        Schema::table('participacion_declaraciones', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_bajas_id')->nullable();
            $table->foreign('motivo_bajas_id')->references('id')->on('motivo_bajas');
            $table->text('motivo_baja')->nullable();
        });
        Schema::table('viajes', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_bajas_id')->nullable();
            $table->foreign('motivo_bajas_id')->references('id')->on('motivo_bajas');
            $table->text('motivo_baja')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bienes_inmuebles', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
        Schema::table('datos_curriculares', function (Blueprint $table) {
            $table->dropColumn('motivo_baja');
        });
        Schema::table('experiencias_laborales', function (Blueprint $table) {
            $table->dropColumn('motivo_baja');
        });
        Schema::table('dependientes_economicos', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
        Schema::table('participacions', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
        Schema::table('beneficios_privados', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
        Schema::table('fideicomisos', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
        Schema::table('donativos', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
        Schema::table('intereses_personals', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
        Schema::table('participacion_declaraciones', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
        Schema::table('viajes', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
    }
}
