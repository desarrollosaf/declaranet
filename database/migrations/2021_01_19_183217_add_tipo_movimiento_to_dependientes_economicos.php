<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoMovimientoToDependientesEconomicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dependientes_economicos', function (Blueprint $table) {
            $table->unsignedBigInteger("tipo_operacion_id")->nullable();
            $table->foreign("tipo_operacion_id")->references('id')->on("tipo_operaciones");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dependientes_economicos', function (Blueprint $table) {
            $table->dropColumn("tipo_operacion_id");
        });
    }
}
