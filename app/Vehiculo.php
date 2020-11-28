<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function vehiculo(){
        return $this->belongsTo(tipoVehiculo::class);
    }

    public function relacion(){
        return $this->belongsTo(relacionTransmisor::class);
    }

    public function registro(){
        return $this->belongsTo(lugarDondeReside::class);
    }

    public function tipoAdquisicion(){
        return $this->belongsTo(formaAdquisicion::class);
    }

    public function pago(){
        return $this->belongsTo(FormasPagos::class);
    }

    public function pais(){
        return $this->belongsTo(Pais::class);
    }

    public function regimen(){
        return $this->belongsTo(RegimenFiscal::class);
    }
}
