<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoApoyo extends Model
{
    protected $table = "tipo_apoyos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
