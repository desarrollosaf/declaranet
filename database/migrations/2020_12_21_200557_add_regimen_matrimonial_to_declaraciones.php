<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegimenMatrimonialToDeclaraciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('declaraciones', function (Blueprint $table) {
            $table->string('regimen_matrimonial')->nullable();
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
            $table->removeColumn('regimen_matrimonial');
        });
    }
}
