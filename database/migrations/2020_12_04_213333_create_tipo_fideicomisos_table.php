<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoFideicomisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_fideicomisos', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/tipoFideicomiso.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipoFideicomiso){
            DB::table("tipo_fideicomisos")->insert([
                "clave" => $tipoFideicomiso->clave,
                "valor" => $tipoFideicomiso->valor
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
        Schema::dropIfExists('tipo_fideicomisos');
    }
}