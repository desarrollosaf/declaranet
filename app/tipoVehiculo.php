<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoVehiculo extends Model
{
   protected $table = "tipo_vehiculos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
