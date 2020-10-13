<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class valorConformeA extends Model
{
    protected $table = "valor_conforme_a_s";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
