<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelOrdenGobierno extends Model
{
    protected $table = "nivel_orden_gobiernos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
