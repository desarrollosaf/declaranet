<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoAdeudo extends Model
{
    protected $table = "tipo_adeudos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
