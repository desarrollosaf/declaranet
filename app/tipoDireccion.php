<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoDireccion extends Model
{
   protected $table = "tipo_direccion";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
