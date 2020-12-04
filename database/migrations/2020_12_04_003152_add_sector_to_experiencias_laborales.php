<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSectorToExperienciasLaborales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experiencias_laborales', function (Blueprint $table) {
            $table->string('sector')->nullable();
            $table->boolean('proveedor_gobierno')->nullable();
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
            $table->dropColumn('sector');
            $table->dropColumn('proveedor_gobierno');
        });
    }
}
