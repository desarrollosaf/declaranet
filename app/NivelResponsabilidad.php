<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelResponsabilidad extends Model
{
    protected $table = "nivel_responsabilidades";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
