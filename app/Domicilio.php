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
    public function entidad()
    {
        return $this->belongsTo(Entidad::class);
    }
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
    public function asentamiento()
    {
        return $this->belongsTo(Asentamiento::class);
    }
}
