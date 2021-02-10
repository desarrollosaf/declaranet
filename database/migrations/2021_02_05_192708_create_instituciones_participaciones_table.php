<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionesParticipacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('instituciones_participaciones', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->softDeletes();
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/institucionParticipa.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $item){
            DB::table("instituciones_participaciones")->insert([
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
        Schema::dropIfExists('instituciones_participaciones');
    }
}
