<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donativo extends Model
{
  use SoftDeletes;
  protected $table="donativos";
  protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
