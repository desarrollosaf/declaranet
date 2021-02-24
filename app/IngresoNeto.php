<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoNeto extends Model
{
    protected $table = "ingresos_netos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function tipoInstrumentos()
    {
        return $this->belongsTo(tipoInstrumento::class,'tipo_de_instrumento');
    }
}
