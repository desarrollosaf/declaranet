<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BienesMueblesBaja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bienes_muebles', function (Blueprint $table) {
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
        Schema::table('bienes_muebles', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
    }
}
