<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipacionEmpresa extends Model
{
    protected $table = "participacion_empresas";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];


    public function tipotitularParticipaciones() {
        return $this->belongsTo(titularBien::class, 'titular_operacion_id');
    }

    public function tipoParticipacion() {
        return $this->belongsTo(tipoParticipacion::class, 'tipo_participacion_id');
    }

    public function tipoRespuesta() {
        return $this->belongsTo(Respuesta::class);
    }

    public function lugarUbica() {
        return $this->belongsTo(LugarUbicacion::class, 'part_ubicacion_id');
    }

    public function tipoSector() {
        return $this->belongsTo(sector::class, 'sector_productivo_id');
    }

    public function Pais() {
        return $this->belongsTo(Pais::class);
    }

     public function Entidad() {
        return $this->belongsTo(Entidad::class);
    }

    public function RelacionTransmisor() {
        return $this->belongsTo(RelacionTransmisor::class,'relacion_transmisores_id');
    }

    public function tipoModalidad() {
        return $this->belongsTo(tipoModalidad::class);
    }

    public function tipoSociedad() {
        return $this->belongsTo(tipoSociedad::class);
    }

    public function tipoOperaciones() {
        return $this->belongsTo(tipoOperacion::class)->withDefault(['valor'=>'N/A']);
    }
}
