<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInmueble extends Model
{
    protected $table = "tipo_inmuebles";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
