<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representacion extends Model {

    protected $table = "representaciones";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function tipotitularParticipaciones() {
        return $this->belongsTo(titularBien::class, 'titular_id');
    }

    public function tipotipoParticipaciones() {
        return $this->belongsTo(tipoRepresentacion::class, 'tipo_representacion_id');
    }
    
    public function tipoRegimen() {
        return $this->belongsTo(RegimenFiscal::class, 'regimen_representante_id');
    }
    
    public function tipoRespuesta() {
        return $this->belongsTo(Respuesta::class, 'respuesta_id');
    }
    
    public function tipoSector() {
        return $this->belongsTo(sector::class, 'tipo_sector_id');
    }
    
    public function lugarUbicacion() {
        return $this->belongsTo(LugarUbicacion::class, 'lugar_ubica_id');
    }
    
    public function paises() {
        return $this->belongsTo(Pais::class, 'pais_id');
    }

    public function entidades() {
        return $this->belongsTo(Entidad::class, 'entidad_id');
    }

}
