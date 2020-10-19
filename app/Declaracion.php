<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Declaracion extends Model
{
    protected $table = "declaraciones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
    
    public function tipo_movimiento(){
        return $this->belongsTo(TipoMovimiento::class);
    }
    public function servidor_publico(){
        return $this->belongsTo(ServidorPublico::class);
    }
    public function pais(){
        return $this->belongsTo(Pais::class);
    }
    public function situacion_personal(){
        return $this->belongsTo(SituacionPersonal::class);
    }
    public function regimen_matrimonial(){
        return $this->belongsTo(RegimenMatrimonial::class);
    }
    public function estatus_declaracion(){
        return $this->belongsTo(EstatusDeclaracion::class);
    }
}
