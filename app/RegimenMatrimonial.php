<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegimenMatrimonial extends Model
{
    protected $table = "regimen_matrimoniales";
	protected $guarded=["id","created_at","updated_at","deleted_at"];
}
