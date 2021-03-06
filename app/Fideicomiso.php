<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fideicomiso extends Model
{
    use SoftDeletes;
    protected $table = "fideicomisos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function tipoRelaciones(){
        return $this->belongsTo(tipoRelacion::class);
    }

    public function tipoParticipacionFideicomisos(){
        return $this->belongsTo(tipoParticipacionFideicomiso::class);
    }

    public function RegimenFiscales(){
        return $this->belongsTo(tipRegimenFiscaloRelacion::class);
    }

    public function sectores(){
        return $this->belongsTo(sector::class);
    }

    public function LugarUbicaciones(){
        return $this->belongsTo(LugarUbicacion::class, 'lugares_ubicacion_id');
    }

    public function Paises(){
        return $this->belongsTo(Pais::class);
    }

    public function tipoFideicomisos(){
        return $this->belongsTo(tipoFideicomiso::class);
    }

    public function tipoPersonaFideicomisos(){
        return $this->belongsTo(tipoPersonaFideicomiso::class);
    }

    public function Entidades(){
        return $this->belongsTo(Entidad::class);
    }

    public function tipoOperaciones(){
        return $this->belongsTo(tipoOperacion::class, 'tipo_operacion_id');
    }
}
