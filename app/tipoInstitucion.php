<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoInstitucion extends Model
{
   protected $table = "tipo_instituciones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
