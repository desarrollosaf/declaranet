<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoParticipacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_participacions', function (Blueprint $table) {
        $table->bigIncrements("id");
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/tipoParticipacion.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_inmueble){
            DB::table("tipo_participacions")->insert([
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
        Schema::dropIfExists('tipo_participacions');
    }
}
