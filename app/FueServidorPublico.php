<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FueServidorPublico extends Model
{
    protected $table = "fue_servidor_publicos";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function TipoInstrumento()
    {
        $this->belongsTo(tipoInstrumento::class);
    }

    public function TipoBien()
    {
        $this->belongsTo(TipoBienEnajenacionBienes::class);
    }
}
