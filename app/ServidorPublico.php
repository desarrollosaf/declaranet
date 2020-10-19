<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServidorPublico extends Model
{
    protected $connection= 'mysql2';
    protected $table = "servidores_publicos";
    public function user(){
        return $this->hasOne(User::class);
    }
}
