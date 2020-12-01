<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TitularInversion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titular_inversiones', function (Blueprint $table) {
            $table->id();
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/titularInversiones.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $titular_inversiones){
            DB::table("titular_inversiones")->insert([
                "clave" => $titular_inversiones->clave,
                "valor" => $titular_inversiones->valor
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titular_inversiones');
    }
}
