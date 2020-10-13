<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividadLaboral extends Model
{
    protected $table = "actividad_laborales";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
