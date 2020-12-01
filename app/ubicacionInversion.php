<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubicacionInversion extends Model
{
     protected $table = "ubicacion_inversion";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
