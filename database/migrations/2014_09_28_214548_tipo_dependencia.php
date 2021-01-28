<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoDependencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection("mysql2")->create('tipo_dependencia', function (Blueprint $table) {
            $table->id();
            $table->string("c_presupDep");
            $table->string("nombre");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/dependencia.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_dependencia){
            DB::connection("mysql2")->table("tipo_dependencia")->insert([
                "c_presupDep" => $tipo_dependencia->C_presupDep,
                "nombre" => $tipo_dependencia->Nombre
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
        Schema::dropIfExists('tipo_dependencia');
    }
}
