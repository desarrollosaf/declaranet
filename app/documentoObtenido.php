<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documentoObtenido extends Model
{
   protected $table = "documento_obtenidos";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
