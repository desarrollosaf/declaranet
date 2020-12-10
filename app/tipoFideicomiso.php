<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoFideicomiso extends Model
{
    protected $table = "tipo_fideicomisos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
