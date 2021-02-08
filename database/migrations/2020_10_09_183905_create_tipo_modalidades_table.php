<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoModalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_modalidad', function (Blueprint $table) {
           $table->bigIncrements("id");
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/tipoModalidad.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_modalidad){
            DB::table("tipo_modalidad")->insert([
                "clave" => $tipo_modalidad->clave,
                "valor" => $tipo_modalidad->valor
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
        Schema::dropIfExists('tipo_modalidad');
    }
}
