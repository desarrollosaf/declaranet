<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoOperacion extends Model
{
     protected $table = "tipo_operacions";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
