<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoTransmisores extends Model
{
    protected $table = "regimenfiscales";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
