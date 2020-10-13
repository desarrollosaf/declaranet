<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{ 
    protected $table = "Generos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
