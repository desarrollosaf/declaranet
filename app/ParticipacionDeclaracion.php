<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipacionDeclaracion extends Model
{
    protected $table = "participacion_declaraciones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
    public function participacion_economica(){
        return $this->belongsTo(TipoTitularDonativo::class,'tipo_titular_donativo_id');
    }
    public function institucion(){
        return $this->belongsTo(InstitucionParticipacion::class,'institucion_participacion_id');
    }
    public function naturaleza_vinculo(){
        return $this->belongsTo(tipoParticipacion::class,'tipo_participacion_id');
    }
    public function tipo_persona_juridica(){
        return $this->belongsTo(TipoOrganizacionComunitaria::class,'tipo_organizacion_id');
    }
    public function tipo_colaboracion(){
        return $this->belongsTo(TipoColaboracion::class,'tipo_colaboracion_id');
    }
    public function tipoOperacion() {
        return $this->belongsTo(tipoOperacion::class,'tipo_operacion_id');
    }
}
