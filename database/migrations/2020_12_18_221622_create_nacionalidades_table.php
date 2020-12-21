<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNacionalidadesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('nacionalidades', function (Blueprint $table) {
            $table->id();
            $table->string("clave");
            $table->string("valor");
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/nacionalidades.json");
        $json = json_decode(file_get_contents($path));
        foreach ($json as $item) {
            DB::table("nacionalidades")->insert([
                "clave" => $item->clave,
                "valor" => $item->valor
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('nacionalidades');
    }

}
