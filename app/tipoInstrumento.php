<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoInstrumento extends Model
{
    protected $table = "tipo_instrumentos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
