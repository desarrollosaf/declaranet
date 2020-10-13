<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugarDondeReside extends Model
{
    protected $table = "lugar_donde_resides";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
