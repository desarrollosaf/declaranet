<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoMovimientosMcg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_movimientos_mcg', function (Blueprint $table) {
            $table->id();
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/tipoMovimientoMCG.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_movimientos_mcg){
            DB::table("tipo_movimientos_mcg")->insert([
                "valor" => $tipo_movimientos_mcg->valor
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
        Schema::dropIfExists('tipo_movimientos_mcg');
    }
}
