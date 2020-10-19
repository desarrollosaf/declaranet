<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\EstatusDeclaracion;

class CreateEstatusDeclaracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatus_declaraciones', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("estatus");
            $table->timestamps();
            $table->softDeletes();
        });
        collect([
            ["estatus" => "Iniciada"],
            ["estatus" => "Terminada"],
            ["estatus" => "Enviada"]
        ])->each(function ($items){
            EstatusDeclaracion::create($items);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estatus_declaraciones');
    }
}
