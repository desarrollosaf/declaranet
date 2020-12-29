<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoDepartamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_departamento', function (Blueprint $table) {
            $table->id();
            $table->string("c_presupDepto");
            $table->string("nombre");
            $table->unsignedBigInteger("id_Dependencia");
            $table->foreign("id_Dependencia")->references("id")->on("tipo_dependencia");
            $table->unsignedBigInteger("id_Direccion");
            $table->foreign("id_Direccion")->references("id")->on("tipo_direccion");
            $table->string("c_presup");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/departamento.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_departamento){
            DB::table("tipo_departamento")->insert([
                "c_presupDepto" => $tipo_departamento->C_presupDepto,
                "nombre" => $tipo_departamento->Nombre,
                "id_Dependencia" => $tipo_departamento->id_Dependencia,
                "id_Direccion" => $tipo_departamento->id_Direccion,
                "c_presup" => $tipo_departamento->c_presup
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
        Schema::dropIfExists('tipo_departamento');
    }
}
