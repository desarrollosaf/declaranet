<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viajes extends Model
{
    protected $table = "viajes";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];
}
