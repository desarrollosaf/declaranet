<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidadDeMedida extends Model
{
   protected $table = "unidad_de_medidas";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
