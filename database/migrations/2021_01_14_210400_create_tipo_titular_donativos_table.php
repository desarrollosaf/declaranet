<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoTitularDonativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_titular_donativos', function (Blueprint $table) {
            $table->id();
            $table->string('valor');
            $table->integer('grado');
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/tipoTitularDonativo.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $item){
            DB::table("tipo_titular_donativos")->insert([
                "valor"=>$item->valor,
                "grado"=>$item->grado
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
        Schema::dropIfExists('tipo_titular_donativos');
    }
}
