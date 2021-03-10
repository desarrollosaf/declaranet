<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CambioDomicilio extends Model
{
    protected $table = 'cambio_domicilios';
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function Entidades()
    {
        return $this->belongsTo(Entidad::class);
    }

    public function LugarUbicaciones()
    {
        return $this->belongsTo(LugarUbicacion::class);
    }
}
