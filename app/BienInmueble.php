<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BienInmueble extends Model {

    protected $table = "bienes_inmuebles";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function tipoInmueble() {
        return $this->belongsTo(TipoInmueble::class, 'tipo_inmueble_id');
    }

    public function titular() {
        return $this->belongsTo(Titular::class);
    }

    public function tipoTercero() {
        return $this->belongsTo(RegimenFiscal::class);
    }

    public function formaAdquisicion() {
        return $this->belongsTo(FormaAdquisicion::class);
    }

    public function formaPago() {
        return $this->belongsTo(FormasPagos::class);
    }

    public function tipoTransmisor() {
        return $this->belongsTo(RegimenFiscal::class);
    }

    public function relacionTransmisor() {
        return $this->belongsTo(RelacionTransmisor::class);
    }

    public function valorConforme() {
        return $this->belongsTo(valorConformeA::class);
    }

    public function ubicacionInmueble() {
        return $this->belongsTo(LugarUbicacion::class);
    }

    public function domicilio() {
        return $this->morphOne(Domicilio::class,'domiciliable');
    }

    public function inmuebleable(){
        return $this->morphTo();
    }

}
