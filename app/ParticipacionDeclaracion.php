<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipacionDeclaracion extends Model
{
    protected $table = "participacion_declaraciones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
