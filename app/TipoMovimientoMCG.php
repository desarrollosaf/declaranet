<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimientoMCG extends Model
{
   protected $table = "tipo_movimientos_mcg";
   protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
