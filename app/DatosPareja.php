<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPareja extends Model
{
    protected $table = 'datos_parejas';
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function relacionDeclarante(){
        return $this->belongsTo(relacionConDeclarante::class);
    }

    public function ciudadanoExtranjero(){
        return $this->belongsTo(extranjero::class);
    }

    public function lugarResidencia(){
        return $this->belongsTo(lugarDondeReside::class);
    }

    public function domicilio(){
        return $this->morphOne(Domicilio::class,"domiciliable");
    }

    public function actividadLaboral(){
        return $this->morphOne(actividadLaboral::class, "actividadLaboral");
    }
}

