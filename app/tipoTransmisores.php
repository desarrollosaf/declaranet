<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoTransmisores extends Model
{
    protected $table = "tipo_transmisores";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
