<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipacionEmpresa extends Model
{
    protected $table = "participacion_empresas";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];
    
    public function tipotitularParticipacion() {
        return $this->belongsTo(titularBien::class);
    }

    public function tipoParticipacion() {
        return $this->belongsTo(tipoParticipacion::class);
    }
    
    public function tipoRespuesta() {
        return $this->belongsTo(Respuesta::class);
    }
    
    
    public function lugarUbica() {
        return $this->belongsTo(LugarUbicacion::class);
    }
    
    public function tipoSector() {
        return $this->belongsTo(sector::class);
    }
    
    public function Pais() {
        return $this->belongsTo(Pais::class);
    }
    
    
}
