<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPareja extends Model
{
    protected $table = 'datos_parejas';
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function relacionDeclarante(){
        return $this->belongsTo(relacionConDeclarante::class,'relacion_id');
    }

    public function ciudadanoExtranjero(){
        return $this->belongsTo(extranjero::class, 'ciudadano_id');
    }

    public function lugarReside(){
        return $this->belongsTo(lugarDondeReside::class, 'lugar_reside_id');
    }

    public function domicilio(){
        return $this->morphOne(Domicilio::class,"domiciliable");
    }

    public function experienciaLaboral(){
        return $this->morphOne(ExperienciaLaboral::class, "experienciable");
    }
}

