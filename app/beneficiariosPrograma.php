<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beneficiariosPrograma extends Model
{
    //protected $table = "beneficiarios_programas";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
