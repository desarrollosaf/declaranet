<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{
    protected $table = "participacions";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
    public function tipoRelaciones(){
        return $this->belongsTo(tipoRelacion::class);
    }

    public function tipoInstituciones(){
        return $this->belongsTo(tipoInstitucion::class);
    }

    public function LugarUbicaciones(){
        return $this->belongsTo(LugarUbicacion::class);
    }

    public function Paises(){
        return $this->belongsTo(Pais::class);
    }

    public function Entidades(){
        return $this->belongsTo(Entidad::class);
    }
}
