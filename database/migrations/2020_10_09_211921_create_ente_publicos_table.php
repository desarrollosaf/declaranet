<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntePublicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ente_publicos', function (Blueprint $table) {
            $table->string("poder");
            $table->string("clave");
            $table->string("siglas");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/entePublico.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_inmueble){
            DB::table("ente_publicos")->insert([
                "poder" => $tipo_inmueble->poder,
                "clave" => $tipo_inmueble->clave,
               "siglas" => $tipo_inmueble->siglas,
                "valor" => $tipo_inmueble->valor
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
        Schema::dropIfExists('ente_publicos');
    }
}
