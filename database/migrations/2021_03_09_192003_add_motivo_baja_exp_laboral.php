<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMotivoBajaExpLaboral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experiencias_laborales', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_baja_id')->nullable();
            $table->foreign('motivo_baja_id')->references('id')->on('motivo_bajas');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experiencias_laborales', function (Blueprint $table) {
            $table->dropColumn("motivo_baja_id");
        });    }
}
