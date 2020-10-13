<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = "tipo_documentos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
