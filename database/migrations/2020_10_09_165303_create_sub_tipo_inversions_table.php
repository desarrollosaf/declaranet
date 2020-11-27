<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTipoInversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_tipo_inversiones', function (Blueprint $table) {
   $table->bigIncrements("id");
            $table->string("clave");
            $table->string("valor");
            $table->unsignedBigInteger("tipoInversion_id");
            $table->foreign("tipoInversion_id")->references("id")->on("tipo_inversiones");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/subTipoInversion.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_inmueble){
            DB::table("sub_tipo_inversiones")->insert([
                "clave" => $tipo_inmueble->clave,
                "valor" => $tipo_inmueble->valor,
                "tipoInversion_id" => $tipo_inmueble->tipoInversion_id
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
        Schema::dropIfExists('sub_tipo_inversions');
    }
}
