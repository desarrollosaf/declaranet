<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaRecepcionDonativo extends Model
{
  protected $table = "forma_recepcion_donativos";
  protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
