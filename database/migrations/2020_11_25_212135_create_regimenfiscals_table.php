<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegimenfiscalsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('regimenfiscales', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/regimenFiscal.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $regimen_Fiscal){
            DB::table("regimenfiscales")->insert([
                "clave" => $regimen_Fiscal->clave,
                "valor" => $regimen_Fiscal->valor
            ]);
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('regimenfiscales');
    }

}
