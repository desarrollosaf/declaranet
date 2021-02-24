<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoCurricular extends Model
{
    protected $table="datos_curriculares";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function curricular()
    {
        return $this->morphTo();
    }

    public function nivel(){
        return $this->belongsTo(nivel::class,'nivel_id');
    }

    public function estatus(){
        return $this->belongsTo(estatus::class);
    }

    public function documento(){
        return $this->belongsTo(documentoObtenido::class);
    }

    public function tipoOperaciones(){
        return $this->belongsTo(tipoOperacion::class,'tipo_operacion_id');
    }

    public function LugarUbicacionInstitucion(){
        return $this->belongsTo(LugarUbicacion::class, 'lugar_ubicacion_id');
    }
}
