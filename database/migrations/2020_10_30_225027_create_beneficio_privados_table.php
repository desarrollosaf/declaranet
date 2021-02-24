<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficioPrivadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficios_privados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('declaracion_id');
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            $table->unsignedBigInteger('tipo_beneficio_id');
            $table->foreign('tipo_beneficio_id')->references('id')->on('tipo_beneficios');
            $table->string('tipo_beneficio')->nullable();
            $table->unsignedBigInteger('beneficiario_id');
            $table->foreign('beneficiario_id')->references('id')->on('beneficiarios_programas');
            $table->string('beneficiario')->nullable();
            $table->unsignedBigInteger('sector_id');
            $table->foreign('sector_id')->references('id')->on('sectores');
            $table->string('sector')->nullable();
            $table->unsignedBigInteger('otorgante_id');
          //  $table->foreign('otorgante_id')->references('id')->on('');
            $table->string('nombre_otorgante')->nullable();
            $table->string('razon_social_otorgante')->nullable();
            $table->string('rfc_otorgante')->nullable();
            $table->string('rfc_otorganteM')->nullable();
            $table->unsignedBigInteger('forma_recepcion_id');
            $table->foreign('forma_recepcion_id')->references('id')->on('forma_recepciones');
            $table->unsignedBigInteger('tipo_monedas_id')->nullable();
            $table->foreign('tipo_monedas_id')->references('id')->on('tipo_monedas');
            $table->string('especie')->nullable();
            $table->integer('monto_mensual')->nullable();
            $table->string('aclaraciones')->nullable();
            $table->string("tipoOperacion")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficios_privados');
    }
}
