<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarUbicacion extends Model
{
    protected $table = "lugares_ubicacion";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
