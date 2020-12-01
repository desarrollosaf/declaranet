<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeneficioPrivado extends Model
{
    protected $table = 'beneficios_privados';
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function tipoBeneficio(){
        return $this->belongsTo(tipoBeneficio::class);
    }

    public function beneficiariosP(){
        return $this->belongsTo(beneficiariosPrograma::class,'beneficiario_id');
    }

    public function sectoresP(){
        return $this->belongsTo(sector::class,'sector_id');
    }

    public function formaRecepcion(){
        return $this->belongsTo(formaRecepcion::class);
    }
}
