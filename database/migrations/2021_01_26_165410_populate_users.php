<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\User;
use App\ServidorPublico;

class PopulateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $servidor = DB::connection("mysql2")->table("servidores_publicos")->where("nombre","Desarrollo")->first();
        if($servidor == null){
            $servidor = DB::connection("mysql2")->table("servidores_publicos")->insert([
                "nombre" => "Desarrollo",
                "primer_apellido" => "PLEM",
                "segundo_apellido" => null,
                "rfc" => rand(),
                "curp" => rand(),
                "homoclave" => rand(),
                "fecha_inicio" => now(),
                "cargo" => "desarrollo",
                "nivel_cargo" => "1",
                "tipo_dependencia" => "1"
            ]);

            $servidor = DB::connection("mysql2")->table("servidores_publicos")->where("nombre","Desarrollo")->first();
            $user = DB::connection("mysql2")->table("users")->insert([
                'name' => "Desarrollo",
                'email' => "plem@pruebas.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'servidor_publico_id' => $servidor->id
            ]);
            dump($servidor->nombre);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
