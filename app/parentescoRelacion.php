<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parentescoRelacion extends Model
{
    protected $table = "parentesco_relaciones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
