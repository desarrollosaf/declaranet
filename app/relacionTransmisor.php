<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relacionTransmisor extends Model
{
    protected $table = "relacion_transmisores";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
