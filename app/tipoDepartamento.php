<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoDepartamento extends Model
{
   protected $table = "tipo_departamento";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
