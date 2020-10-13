<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoParticipacionFideicomiso extends Model
{
    protected $table = "tipo_participacion_fideicomisos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
