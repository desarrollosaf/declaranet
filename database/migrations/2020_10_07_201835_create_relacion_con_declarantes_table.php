<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionConDeclarantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_con_declarantes', function (Blueprint $table) {
           $table->bigIncrements("id");
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
          $path = base_path("database/catalogos/catalogos/json/s1/relacionConDeclarante.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $relacionConDeclarante){
            DB::table("relacion_con_declarantes")->insert([
                "clave" => $relacionConDeclarante->clave,
                "valor" => $relacionConDeclarante->valor
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
        Schema::dropIfExists('relacion_con_declarantes');
    }
}
