<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHonorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection("mysql2")->create('honorario', function (Blueprint $table) {
            $table->id();
            $table->string("respuesta");
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/respuestas.json");
        $json = json_decode(file_get_contents($path));
        foreach ($json as $item) {
            DB::connection("mysql2")->table("honorario")->insert([
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
        Schema::dropIfExists('honorario');
    }
}
