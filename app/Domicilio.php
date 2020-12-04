<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table="domicilios";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
    /**
     * Declara la entidad como polimorfica
     * @return MorphTo
     */
    public function domiciliable()
    {
        return $this->morphTo();
    }
    public function entidad_domicilio()
    {
        return $this->belongsTo(Entidad::class,'entidad_id');
    }
    public function municipio_domicilio()
    {
        return $this->belongsTo(Municipio::class, "municipio_id");
    }
    public function pais_domicilio()
    {
        return $this->belongsTo(Pais::class, "pais_id");
    }
    public function asentamiento()
    {
        return $this->belongsTo(Asentamiento::class);
    }
}
