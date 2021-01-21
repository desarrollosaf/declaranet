<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionParticipacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones_participacion', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->softDeletes();
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/instituciones_participacion.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $item){
            DB::table("instituciones_participacion")->insert([
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
        Schema::dropIfExists('instituciones_participacion');
    }
}
