<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subTipoInversion extends Model
{
    protected $table = "sub_tipo_inversiones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
