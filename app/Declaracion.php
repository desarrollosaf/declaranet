<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Donativo;

class Declaracion extends Model {

    protected $table = "declaraciones";
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];

    public function tipo_movimiento() {
        return $this->belongsTo(TipoMovimiento::class);
    }

    public function servidor_publico() {
        return $this->belongsTo(ServidorPublico::class);
    }

    public function pais() {
        return $this->belongsTo(Pais::class);
    }

    public function situacion_personal() {
        return $this->belongsTo(SituacionPersonal::class);
    }

    public function regimenMatrimonial() {
        return $this->belongsTo(RegimenMatrimonial::class);
    }

    public function estatus_declaracion() {
        return $this->belongsTo(EstatusDeclaracion::class);
    }

    public function beneficios_privados() {
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

    public function vehiculos() {
        return $this->morphMany(Vehiculo::class,'vehiculosable');
    }

    public function BienesMuebles() {
        return $this->hasMany(BienesMuebles::class);
    }

    public function pareja() {
        return $this->hasOne(DatosPareja::class);
    }

    public function datos_empleo_declarante() {
        return $this->hasOne(DatoEmpleoDeclarante::class);
    }

    public function apoyo_beneficio() {
        return $this->hasMany(ApoyoBeneficio::class);
    }

    public function DependienteEconomicos() {
        return $this->hasMany(DependienteEconomico::class);
    }

    public function participacion_empresas() {
        return $this->hasMany(ParticipacionEmpresa::class);
    }

    public function clientes() {
        return $this->hasMany(Clientes::class);
    }

    public function participacion() {
        return $this->hasMany(Participacion::class);
    }

    public function prestamosComodato() {
        return $this->hasMany(PrestamoComodato::class);
    }

    public function adeudos_pasivos() {
        return $this->hasMany(AdeudosPasivos::class);
    }

    public function fueServidorPublico() {
        return $this->hasOne(FueServidorPublico::class);
    }

    public  function fideicomisos(){
        return $this->hasMany(Fideicomiso::class);
    }

    public function representacion() {
        return $this->hasMany(Representacion::class);
    }
    public function bienes_inmuebles(){
        return $this->morphMany(BienInmueble::class, 'inmuebleable');
    }

    public function donativos(){
        return $this->hasMany(Donativo::class);
    }

    public function intereses(){
        return $this->hasMany(InteresesPersonal::class);
    }

    public function ingresos() {
        return $this->hasOne(IngresoNeto::class);
    }

    public function cambioDependencias() {
        return $this->hasOne(CambioDependencia::class);
    }

    public function CambioDomicilios() {
        return $this->hasOne(CambioDomicilio::class);
    }

    public function CambioDatosEncargos() {
        return $this->hasOne(CambioDatosEncargo::class);
    }
    public function participaciones(){
        return $this->hasMany(ParticipacionDeclaracion::Class);
    }

}
