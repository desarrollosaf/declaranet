<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoModalidad extends Model
{
   protected $table = "tipo_modalidad";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
