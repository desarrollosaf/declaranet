<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoPersonaFideicomiso extends Model
{
    protected $table = "tipo_persona_fideicomisos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
