<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoPersonaFideicomisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_persona_fideicomisos', function (Blueprint $table) {

                $table->bigIncrements("id");
                $table->string("tipo_persona_fideicomiso");

                $table->timestamps();
                $table->softDeletes();
            });
            collect([
                ["tipo_persona_fideicomiso" => "PERSONA FÍSICA"],
                ["tipo_persona_fideicomiso" => "PERSONA MORAL"],
                ["tipo_persona_fideicomiso" => "DECLARANET"]
            ])->each(function ($items){
                \App\tipoPersonaFideicomiso::create($items);
            });
        }
    public function down()
    {
        Schema::dropIfExists('tipo_persona_fideicomisos');
    }
}
