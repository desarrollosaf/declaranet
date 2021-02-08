<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoSociedad extends Model
{
   protected $table = "tipo_sociedad";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
