<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoPersona extends Model
{
     protected $table = "tipo_persona";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
