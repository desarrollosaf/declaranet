<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class titularInversion extends Model
{
    protected $table = "titular_inversiones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
  
}