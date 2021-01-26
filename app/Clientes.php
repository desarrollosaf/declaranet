<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function RegimenFiscal(){
        return $this->belongsTo(RegimenFiscal::class);
    }

    public function Respuesta(){
        return $this->belongsTo(Respuesta::class,'respuestas_id');
    }

    public function tipoRelaciones(){
        return $this->belongsTo(tipoRelacion::class);
    }

    public function sectores(){
        return $this->belongsTo(sector::class,'sectores_id');
    }

    public function lugarDondeReside(){
        return $this->belongsTo(lugarDondeReside::class, 'lugar_donde_resides_id');
    }

    public function Pais(){
        return $this->belongsTo(Pais::class);
    }

    public function Entidades(){
        return $this->belongsTo(Entidad::class);
    }
}
