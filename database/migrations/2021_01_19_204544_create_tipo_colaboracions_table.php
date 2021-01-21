<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoColaboracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_colaboraciones', function (Blueprint $table) {
            $table->id();
            $table->string("tipo_colaboracion");
            $table->softDeletes();
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/tipoColaboracion.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $item){
            DB::table("tipo_colaboraciones")->insert([
                "tipo_colaboracion"=>$item->valor
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
        Schema::dropIfExists('tipo_colaboraciones');
    }
}
