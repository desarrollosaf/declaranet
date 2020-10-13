<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoInversion extends Model
{
    protected $table = "tipo_inversiones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
