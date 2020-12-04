<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrestamoComodato extends Model
{
    protected $table = 'prestamo_comodatos';
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function inmuebles()
    {
        return $this->morphOne(BienInmueble::class, "inmuebleable");
    }

    public function vehiculos()
    {
        return $this->morphOne(Vehiculo::class, "vehiculosable");
    }

    public function tipoBien()
    {
        return $this->belongsTo(TipoBienEnajenacionBienes::class);
    }
}
