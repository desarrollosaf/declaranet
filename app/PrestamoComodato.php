<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrestamoComodato extends Model
{
    use SoftDeletes;
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
        return $this->belongsTo(TipoBienEnajenacionBienes::class, 'tipo_bien_id');
    }
}
