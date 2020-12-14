<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DependienteEconomico extends Model
{
    use SoftDeletes;
    protected $tabla = "dependiente_economicos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
    public function domicilio(){
        return $this->morphOne(Domicilio::class, 'domiciliable');
    }
    public function dato_laboral(){
        return $this->morphOne(ExperienciaLaboral::class, 'experienciable');
    }
    public function relacion(){
        return $this->belongsTo(RelacionTransmisor::class,'relacion_transmisor_id');
    }
}
