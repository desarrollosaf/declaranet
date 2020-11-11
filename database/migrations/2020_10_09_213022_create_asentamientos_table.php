<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Municipio;
use App\Entidad;

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
            $table->string("codigo_postal");
            $table->string("asentamiento");
            $table->unsignedBigInteger("municipio_id");
            $table->foreign("municipio_id")->references("id")->on("municipios");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/asentamientos.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $asentamiento){
            //obtenemos el municipio
            $municipio = DB::select("select * from municipios where clave = ".$asentamiento->cve_agem." and clave_estado = ".$asentamiento->cve_agee);
            $municipio = $municipio[0];            
            if($municipio != null){
                DB::table("asentamientos")->insert([
                    "cve_asenta" => $asentamiento->cve_asenta,
                    "codigo_postal" => $asentamiento->nom_clave,
                    "asentamiento" => $asentamiento->nom_asenta,
                    "municipio_id" => $municipio->id
                ]);
            }
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
