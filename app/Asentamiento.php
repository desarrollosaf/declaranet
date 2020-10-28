<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asentamiento extends Model
{
    
    protected $table = "asentamientos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
