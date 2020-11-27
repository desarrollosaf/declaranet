<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->string("respuesta");
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/respuestas.json");
        $json = json_decode(file_get_contents($path));
        foreach ($json as $item) {
            DB::table("respuestas")->insert([
                "respuesta" => $item->respuesta
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
        Schema::dropIfExists('respuestas');
    }
}
