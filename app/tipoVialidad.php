<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoVialidad extends Model
{
    protected $table = "tipo_vialidades";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}