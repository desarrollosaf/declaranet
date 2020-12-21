<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNacionalidadIdToDeclaraciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('declaraciones', function (Blueprint $table) {
            $table->unsignedBigInteger("nacionalidad_id")->nullable();
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('declaraciones', function (Blueprint $table) {
            $table->removeColumn('nacionalidad_id');
        });
    }
}
