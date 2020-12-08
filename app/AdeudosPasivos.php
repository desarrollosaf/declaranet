<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdeudosPasivos extends Model
{
    protected $table = "adeudos_pasivos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

      
    public function titularAdeudo(){
        return $this->hasOne(titularInversion::class,'id','titular_adeudo_id');
    }
    
    public function tipoAdeudo(){
        return $this->hasOne(tipoAdeudo::class,'id','tipo_adeudo_id');
    }
 
    
}
 