<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BeneficioPrivado extends Model
{
    use SoftDeletes;
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

    public function tipoMonedas(){
        return $this->belongsTo(tipoMoneda::class);
    }

    public function RegimenFiscal(){
        return $this->belongsTo(RegimenFiscal::class, 'tipo_beneficio_id');
    }
    public function tipoOperaciones(){
        return $this->belongsTo(tipoOperacion::class, 'tipo_operacion_id');
    }
}
