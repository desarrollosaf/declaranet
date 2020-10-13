<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
   protected $table = "tipo_movimientos";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
