<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InversionesDeclarante extends Model
{
    protected $table = "inversiones_cuentas";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function inversiones(){
        return $this->morphTo();
    }
  
}
    