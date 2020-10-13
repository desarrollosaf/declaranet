<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoBienEnajenacionBienes extends Model
{
    protected $table = "tipo_bien_enajenacion_bienes";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
