<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = "municipios";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
