<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAsentamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asentamientos', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("cve_asenta");
            $table->string("nom_clave");
            $table->string("nom_asenta");
            $table->string("nom_tipo_asenta");
            $table->string("nom_agem");
            $table->string("nom_agee");
            $table->string("nom_ciudad");
            $table->string("cve_agee");
            $table->string("cve_oficina");
            $table->string("cve_tipo_asenta");
            $table->string("cve_agem");
            $table->string("nom_zona");
            $table->string("cve_ciudad");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/asentamientos.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $asentamiento){
            DB::table("asentamientos")->insert([
                "cve_asenta" => $asentamiento->cve_asenta,
                "nom_clave" => $asentamiento->nom_clave,
                "nom_asenta" => $asentamiento->nom_asenta,
                "nom_tipo_asenta" => $asentamiento->nom_tipo_asenta,
                "nom_agem" => $asentamiento->nom_agem,
                "nom_agee" => $asentamiento->nom_agee,
                "nom_ciudad" => $asentamiento->nom_ciudad,
                "cve_agee" => $asentamiento->cve_agee,
                "cve_oficina" => $asentamiento->cve_oficina,
                "cve_tipo_asenta" => $asentamiento->cve_tipo_asenta,
                "cve_agem" => $asentamiento->cve_agem,
                "nom_zona" => $asentamiento->nom_zona,
                "cve_ciudad" => $asentamiento->cve_ciudad,
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
        Schema::dropIfExists('asentamientos');
    }
}
