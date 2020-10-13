<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motivoBaja extends Model
{
   protected $table = "motivo_bajas";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
