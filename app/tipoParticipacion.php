<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoParticipacion extends Model
{
     protected $table = "tipo_participacions";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
