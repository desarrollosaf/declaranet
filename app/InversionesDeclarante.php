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

    public function subTipoInversiones(){
        return $this->belongsTo(subTipoInversion::class, 'descripcion_tipo_inversion_id');
    }

    public function tipoTercero(){
        return $this->belongsTo(tipoPersona::class, 'tipo_de_tercero_id');
    }

    public function ubicacionInversion(){
        return $this->belongsTo(ubicacionInversion::class, 'ubicacion_inversion_id');
    }

    public function tipoMoneda(){
        return $this->belongsTo(tipoMoneda::class, 'tipo_de_moneda_id');
    }

    public function nombreTitular(){
        return $this->hasOne(titularInversion::class,'id','titular_inversion_id');
    }

}
