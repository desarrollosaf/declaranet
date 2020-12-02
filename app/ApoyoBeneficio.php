<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApoyoBeneficio extends Model
{
    protected $table = "apoyo_beneficio";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    
    public function tipoBeneficiario(){
        return $this->hasOne(parentescoRelacion::class,'id','titular_apoyo_id');
    }
    
    public function nivelGobierno(){
        return $this->hasOne(Nivelordengobierno::class,'id','nivel_orden_gobierno_id');
    }

    public function tipoApoyo(){
        return $this->hasOne(tipoApoyo::class,'id','tipo_apoyo_id');
    }
    
    
}
  