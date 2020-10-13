<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoBeneficio extends Model
{
    protected $table = "tipo_beneficios";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

}
