<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formaRecepcion extends Model
{
    protected $table = "forma_recepciones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
