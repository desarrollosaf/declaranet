<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExperienciaLaboral extends Model
{
    use SoftDeletes;
    protected $table = "experiencias_laborales";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function experienciable(){
        return $this->morphTo();
    }
    public function ambito_sectores(){
        return $this->belongsTo(ambitoSector::class,'ambito_sector_id');
    }

    public function sectores(){
        return $this->belongsTo(sector::class,'sector_id');
    }
    public function Nivelordengobiernos(){
        return $this->belongsTo(Nivelordengobierno::class,'nivel_orden_gobierno_id');
    }

    public function ambitoPublicos(){
        return $this->belongsTo(ambitoPublico::class,'ambito_publico_id');
    }

    public function LugarUbicaciones(){
        return $this->belongsTo(LugarUbicacion::class,'lugares_ubicacion_id');
    }
    public function tipoOperaciones(){
        return $this->belongsTo(tipoOperacion::class, 'tipo_operacion_id');
    }
}
