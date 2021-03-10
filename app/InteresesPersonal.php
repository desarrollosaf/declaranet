<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InteresesPersonal extends Model {
    use SoftDeletes;
    protected $table = "intereses_personals";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function experienciaLaboral() {
        return $this->morphOne(ExperienciaLaboral::class, "experienciable");
    }

    public function tipoOperaciones(){
        return $this->belongsTo(tipoOperacion::class, 'tipo_operacion_id');
    }

}
