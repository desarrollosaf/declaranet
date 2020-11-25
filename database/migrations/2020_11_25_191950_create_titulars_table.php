<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitularsTable extends Migration
{
   
    public function up()
    {
        Schema::create('titulares', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/D_titular.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $titulares){
            DB::table("titulares")->insert([
                "clave" => $titulares->clave,
                "valor" => $titulares->valor
            ]);
        }
    }
    
    public function down()
    {
        Schema::dropIfExists('titulars');
    }
}
