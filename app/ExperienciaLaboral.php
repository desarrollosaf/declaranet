<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    protected $table = "experiencias_laborales";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function experienciable(){
        return $this->morphTo();
    }
    public function ambito_sector(){
        return $this->belongsTo(AmbitoSector::class);
    }
}
