<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoOrganizacionComunitariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_organizaciones_comunitarias', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->softDeletes();
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/tipoPersonaJuridico.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $item){
            DB::table("tipo_organizaciones_comunitarias")->insert([
                "nombre"=>$item->valor
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
        Schema::dropIfExists('tipo_organizaciones_comunitarias');
    }
}
