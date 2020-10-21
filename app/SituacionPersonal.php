<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SituacionPersonal extends Model
{
    protected $table = "situaciones_personales";
	protected $guarded=["id","created_at","updated_at","deleted_at"];
}