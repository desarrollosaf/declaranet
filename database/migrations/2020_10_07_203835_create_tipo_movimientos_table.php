<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\TipoMovimiento;

class CreateTipoMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_movimientos', function (Blueprint $table) {
            $table->bigIncrements("id");
                        $table->string("tipo_movimiento");

            $table->timestamps();
            $table->softDeletes();
        });
        collect([
            ["tipo_movimiento" => "INICIAL"],
            ["tipo_movimiento" => "MODIFICACION"],
            ["tipo_movimiento" => "TERMINACION"]
        ])->each(function ($items){
            TipoMovimiento::create($items);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_movimientos');
    }
}
