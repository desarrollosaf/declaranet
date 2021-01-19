<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoOperacionToTipoRepresentaciones extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('tipo_representaciones', function (Blueprint $table) {
            $table->unsignedBigInteger("tipo_operacion_id")->nullable();
            $table->foreign("tipo_operacion_id")->references('id')->on("tipo_operaciones");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('tipo_representaciones', function (Blueprint $table) {
       $table->dropColumn("tipo_operacion_id");
        });
    }

}
