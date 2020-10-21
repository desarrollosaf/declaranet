<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstatusDeclaracion extends Model
{
    protected $table = "estatus_declaraciones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
