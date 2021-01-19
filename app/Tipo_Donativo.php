<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Donativo extends Model
{
    protected $table = "tipo_donativos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
