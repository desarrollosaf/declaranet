<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ambitoSector extends Model
{
   protected $table = "ambito_sectores";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
