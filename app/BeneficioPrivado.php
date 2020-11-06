<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeneficioPrivado extends Model
{
    protected $table = 'beneficios_privados';
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function tipo_beneficio(){
        return $this->belongsTo(tipoBeneficio::class);
    }

    public function beneficiarios_programa(){
        return $this->belongsTo(beneficiariosPrograma::class);
    }

    public function sector(){
        return $this->belongsTo(sector::class);
    }

    public function forma_recepcion(){
        return $this->belongsTo(formaRecepcion::class);
    }
}
