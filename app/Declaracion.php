<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Declaracion extends Model
{
    protected $table = "declaraciones";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function tipo_movimiento(){
        return $this->belongsTo(TipoMovimiento::class);
    }
    public function servidor_publico(){
        return $this->belongsTo(ServidorPublico::class);
    }
    public function pais(){
        return $this->belongsTo(Pais::class);
    }
    public function situacion_personal(){
        return $this->belongsTo(SituacionPersonal::class);
    }
    public function regimen_matrimonial(){
        return $this->belongsTo(RegimenMatrimonial::class);
    }
    public function estatus_declaracion(){
        return $this->belongsTo(EstatusDeclaracion::class);
    }
    public function beneficios_privados(){
        return $this->hasMany(BeneficioPrivado::class);
    }
    public function domicilio() {
        return $this->morphOne(Domicilio::class, 'domiciliable');
    }
    public function experiencias_laborales() {
        return $this->morphMany(ExperienciaLaboral::class, 'experienciable');
    }
    public function inversiones_cuentas() {
        return $this->hasMany(InversionesDeclarante::class);
    }
    public function datos_curriculares() {
        return $this->morphMany(DatoCurricular::class, 'curricular');
    }
    public  function vehiculos(){
        return $this->hasMany(Vehiculo::class);
    }
    public  function BienesMuebles() {
        return $this->hasMany(BienesMuebles::class);
    }
    public  function pareja() {
        return $this->belongsTo(DatosPareja::class);
    }
}
