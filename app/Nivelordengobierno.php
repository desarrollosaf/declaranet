<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivelordengobierno extends Model
{
    protected $table = "nivel_orden_gobiernos_";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
