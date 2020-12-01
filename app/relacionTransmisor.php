<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelacionTransmisor extends Model
{
    protected $table = "relacion_transmisores";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
