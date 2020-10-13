<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntePublico extends Model
{
    protected $table = "ente_publicos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
