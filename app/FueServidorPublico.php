<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FueServidorPublico extends Model
{
    protected $table = "fue_servidor_publicos";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function TipoInstrumento()
    {
        $this->belongsTo(tipoInstrumento::class, 'tipo_de_instrumento_id');
    }

    public function TipoBien()
    {
        $this->belongsTo(TipoBienEnajenacionBienes::class);
    }
}
