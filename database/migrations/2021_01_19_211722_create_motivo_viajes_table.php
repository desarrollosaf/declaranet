<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotivoViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivo_viajes', function (Blueprint $table) {
            $table->id();
            $table->string("valor");
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/motivoViajes.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $item){
            DB::table("motivo_viajes")->insert([
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
        Schema::dropIfExists('motivo_viajes');
    }
}
