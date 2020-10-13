<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class titularBien extends Model
{
   protected $table = "titular_bienes";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
