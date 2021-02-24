<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServidorPublico extends Model
{
    protected $connection= 'mysql2';
    protected $table = "servidores_publicos";
    protected $fillable = ['id','nombre','primer_apellido','segundo_apellido','curp','rfc','homoclave'];
    public function user(){
        return $this->hasOne(User::class);
    }

}
