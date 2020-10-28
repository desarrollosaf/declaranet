<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\LugarUbicacion;

class CreateLugarDondeSeUbicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('lugares_ubicacion', function (Blueprint $table) {
            $table->bigIncrements("id");
         
            $table->string("valor");
            $table->timestamps();
            $table->softDeletes();
            
        });
        collect([
            ["valor" => "MÉXICO"],
            ["valor" => "EXTRANJERO"]
        ])->each(function ($items){
            LugarUbicacion::create($items);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugares_ubicacion');
    }
}
