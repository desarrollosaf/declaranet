<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoDonativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_donativos', function (Blueprint $table) {
            $table->id();
            $table->string("valor");
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/tipoDonativos.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $item){
            DB::table("tipo_donativos")->insert([
                "valor"=>$item->valor
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
        Schema::dropIfExists('tipo__donativos');
    }
}
