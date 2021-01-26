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

    public function tipoMoneda()
    {
        return $this->belongsTo(tipoMoneda::class,'tipo_moneda');
    }

    public function tipoPersona()
    {
        return $this->belongsTo(tipoPersona::class,'tipo_otorgante_id');
    }

    public function LugarUbicacion()
    {
        return $this->belongsTo(LugarUbicacion::class,'ubicacion_adeudo_id');
    }


}
