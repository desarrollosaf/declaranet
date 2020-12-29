<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoDireccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_direccion', function (Blueprint $table) {
            $table->id();
            $table->string("c_presupDir");
            $table->string("nombre");
            $table->unsignedBigInteger("id_Dependencia");
            $table->foreign("id_Dependencia")->references("id")->on("tipo_dependencia");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/direccion.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_direccion){
            DB::table("tipo_direccion")->insert([
                "c_presupDir" => $tipo_direccion->C_presupDir,
                "nombre" => $tipo_direccion->Nombre,
                "id_Dependencia" => $tipo_direccion->id_Dependencia
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
        Schema::dropIfExists('tipo_direccion');
    }
}
