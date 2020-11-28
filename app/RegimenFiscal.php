<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegimenFiscal extends Model
{
    protected $table='regimen_fiscal';
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
