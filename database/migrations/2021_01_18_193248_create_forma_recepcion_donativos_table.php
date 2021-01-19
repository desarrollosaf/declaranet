<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormaRecepcionDonativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forma_recepcion_donativos', function (Blueprint $table) {
            $table->id();
            $table->string("valor");
            $table->timestamps();
        });
        $path = base_path("database/catalogos/catalogos/json/s1/formaRecepcionDonativos.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $item){
            DB::table("forma_recepcion_donativos")->insert([
                "valor"=>$item->valor
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
        Schema::dropIfExists('forma_recepcion_donativos');
    }
}
