<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionTransmisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_transmisores', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
         $path = base_path("database/catalogos/catalogos/json/s1/relacionTransmisor.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_inmueble){
            DB::table("relacion_transmisores")->insert([
                "clave" => $tipo_inmueble->clave,
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
        Schema::dropIfExists('relacion_transmisors');
    }
}
