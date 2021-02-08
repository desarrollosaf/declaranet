<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSociedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_sociedad', function (Blueprint $table) {
           $table->bigIncrements("id");
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/tipoSociedad.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_sociedad){
            DB::table("tipo_sociedad")->insert([
                "clave" => $tipo_sociedad->clave,
                "valor" => $tipo_sociedad->valor
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
        Schema::dropIfExists('tipo_sociedad');
    }
}
