<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoRelacion extends Model
{
     protected $table = "tipo_relaciones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
