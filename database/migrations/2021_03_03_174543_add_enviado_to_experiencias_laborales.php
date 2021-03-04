<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnviadoToExperienciasLaborales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('declaraciones', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('domicilios', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('datos_curriculares', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('beneficios_privados', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('experiencias_laborales', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('dato_empleo_declarantes', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('datos_parejas', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('dependientes', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('ingresos_netos', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('inversiones_cuentas', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('bienes_muebles', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('bienes_inmuebles', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('apoyo_beneficio', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('prestamo_comodatos', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('participacion_empresas', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('clientes', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('dependientes_economicos', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('participacions', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('adeudos_pasivos', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('fideicomisos', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('fue_servidor_publicos', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('representaciones', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('donativos', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('intereses_personals', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('participacion_declaraciones', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('viajes', function (Blueprint $table) {
            $table->boolean("enviado")->default(false);
        });
        Schema::table('declaraciones', function (Blueprint $table) {
            $table->date("fecha_envio")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('declaraciones', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('experiencias_laborales', function (Blueprint $table) {
            $table->boolean("domicilios")->default(false);
        });
        Schema::table('datos_curriculares', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('beneficios_privados', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('experiencias_laborales', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('dato_empleo_declarantes', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('datos_parejas', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('dependientes', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('ingresos_netos', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('inversiones_cuentas', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('bienes_muebles', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('vehiculos', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('bienes_inmuebles', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('apoyo_beneficio', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('prestamo_comodatos', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('participacion_empresas', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('dependientes_economicos', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('participacions', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('adeudos_pasivos', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('fideicomisos', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('fue_servidor_publicos', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('representaciones', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('donativos', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('intereses_personals', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('participacion_declaraciones', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('viajes', function (Blueprint $table) {
            $table->dropColumn("enviado");
        });
        Schema::table('declaraciones', function (Blueprint $table) {
            $table->dropColumn("fecha_envio");
        });
    }
}
