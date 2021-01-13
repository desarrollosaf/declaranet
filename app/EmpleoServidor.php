<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleoServidor extends Model
{
    protected $table = "empleo_servidor";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
  
}