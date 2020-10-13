<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $table = "puestos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
