<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoMoneda extends Model
{
     protected $table = "tipo_monedas";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
