<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelordengobiernosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel_orden_gobiernos', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
         $path = base_path("database/catalogos/catalogos/json/s1/nivelOrdenGobierno.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $nivel_orden_gobiernos){
            DB::table("nivel_orden_gobiernos")->insert([
                "clave" => $nivel_orden_gobiernos->clave,
                "valor" => $nivel_orden_gobiernos->valor
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
        Schema::dropIfExists('nivel_orden_gobiernos');
    }
}
