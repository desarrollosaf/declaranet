<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class extranjero extends Model
{
   protected $table = "extrajeros";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
