<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CambioDatosEncargo extends Model
{
    protected $table = "cambio_datos_encargos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function EntePublicos(){
        return $this->belongsTo(EntePublico::class, 'ente_publicos_id');
    }

    public function Respuestas(){
        return $this->belongsTo(Respuesta::class);
    }

    public function Entidades(){
        return $this->belongsTo(Entidad::class);
    }
}
