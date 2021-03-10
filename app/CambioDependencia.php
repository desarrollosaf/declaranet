<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CambioDependencia extends Model
{
    protected $table = 'cambio_dependencias';
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function SituacionPersonales()
    {
        return $this->belongsTo(SituacionPersonal::class);
    }

    public function RegimenMatrimoniales()
    {
        return $this->belongsTo(RegimenMatrimonial::class);
    }


}
