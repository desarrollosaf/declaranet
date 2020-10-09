<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SituacionPersonalEstadoCivil extends Model
{
    protected $table = "situacion_personal_estado_civiles";
	protected $guarded=["id","created_at","updated_at","deleted_at"];
}