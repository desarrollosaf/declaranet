<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paises extends Model
{
   protected $table = "paises";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
