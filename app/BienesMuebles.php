<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BienesMuebles extends Model
{
    protected $table = "bienes_muebles";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
    public function TitularBien()
    {
        return $this->belongsTo(titularBien::class);
    }
    public function TipoBien()
    {
        return $this->belongsTo(tipoBienBienesMuebles::class);
    }
    public function TipoTercero()
    {
        return $this->belongsTo(RegimenFiscal::class);
    }
    public function TransmisorPropiedad()
    {
        return $this->belongsTo(RegimenFiscal::class);
    }
    public function RelacionTransmisor()
    {
        return $this->belongsTo(relacionTransmisor::class);
    }
    public function FormaAdquisicion()
    {
        return $this->belongsTo(formaAdquisicion::class);
    }
    public function FormaPago()
    {
        return $this->belongsTo(FormasPagos::class);
    }
    public function TipoMoneda()
    {
        return $this->belongsTo(tipoMoneda::class);
    }
}
