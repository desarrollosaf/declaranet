<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formaAdquisicion extends Model
{
   protected $table = "forma_adquisiciones";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
