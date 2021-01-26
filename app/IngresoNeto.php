<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoNeto extends Model
{
    protected $table = "ingresos_netos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function tipoInstrumento()
    {
        return $this->belongsTo(tipoInstrumento::class);
    }
}
