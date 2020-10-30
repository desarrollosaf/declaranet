<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = "entidades";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
