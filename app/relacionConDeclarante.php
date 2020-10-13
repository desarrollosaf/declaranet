<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relacionConDeclarante extends Model
{
    protected $table = "relacion_con_declarantes";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
