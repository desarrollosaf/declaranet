<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estatus extends Model
{
    protected $table = "estatuses";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
