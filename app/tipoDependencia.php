<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoDependencia extends Model
{
   protected $table = "tipo_dependencia";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
