<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viajes extends Model
{
    protected $table = "viajes";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function motivo_viaje(){
        return $this->belongsTo(MotivoViajes::class);
    }

    public function tipoMonedas()
    {
        return $this->belongsTo(tipoMoneda::class, "tipo_moneda_id");
    }

    public function tipoOperaciones(){
        return $this->belongsTo(tipoOperacion::class, 'tipo_operacion_id');
    }
}
