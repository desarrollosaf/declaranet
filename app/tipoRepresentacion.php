<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoRepresentacion extends Model
{
     protected $table = "tipo_representaciones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
