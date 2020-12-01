<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InversionesDeclarante extends Model
{
    protected $table = "inversiones_cuentas";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function tipoInversion(){
        return $this->hasOne(tipoInversion::class,'id','tipo_de_inversion_id');
    }
    
    public function nombreTitular(){
        return $this->hasOne(titularInversion::class,'id','titular_inversion_id');
    }
  
}
    