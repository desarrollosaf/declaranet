<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ambitoPublico extends Model
{
    protected $table = "ambito_publicos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
