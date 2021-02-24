<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FueServidorPublico extends Model
{
    protected $table = "fue_servidor_publicos";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function TipoInstrumentosInve()
    {
        return $this->belongsTo(tipoInstrumento::class, 'tipo_de_instrumento_id');
    }

    public function TipoBien()
    {
        return $this->belongsTo(TipoBienEnajenacionBienes::class,'tipo_de_bien_id');
    }
}
