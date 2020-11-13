<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = "sectores";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
