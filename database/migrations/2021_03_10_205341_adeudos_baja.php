<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdeudosBaja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adeudos_pasivos', function (Blueprint $table) {
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
        Schema::table('adeudos_pasivos', function (Blueprint $table) {
            $table->dropColumn('motivo_bajas_id');
            $table->dropColumn('motivo_baja');
        });
    }
}
