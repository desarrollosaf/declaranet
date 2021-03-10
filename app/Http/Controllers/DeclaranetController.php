<?php

namespace App\Http\Controllers;

use App\Declaranet;
use Illuminate\Http\Request;
use App\Declaracion;
use Illuminate\Support\Facades\DB;

class DeclaranetController extends Controller
{
    private $request;
    public function __construct(Request $request){
        $this->request = $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function IniciarDeclaracion()
    {
        /*$declaracion = Declaracion::create([
            "servidor_publico_id" => auth()->user()->servidor_publico_id,
            "tipo_movimiento_id" => $this->request->tipo_movimiento_id,
            "fecha_declaracion" => now(),
            "estatus_declaracion_id" => 1
        ]);*/
        $this->request->session()->put("declaracion_id",$declaracion->id);

        return $declaracion;
    }
    public function ContinuarDeclaracion()
    {
     
        $this->request->session()->put("declaracion_id",$this->request->declaracion_id);
        return "Correcto";
    }
    public function EnviarDeclaracion(){
        //Obtenemos la declaración
        $declaracion = Declaracion::find($this->request->session()->get('declaracion_id'));
        DB::beginTransaction();
        try{
//            Cambiamos el estatus de la declaracion
            $declaracion->update(["estatus_declaracion_id" => 3]);
//            Rrecorremos los valores de la declaración para agregar el dato de enviado

//            beneficios_privados
            self::MarcarEnviados($declaracion->beneficios_privados, true);
//            domicilio
            self::MarcarEnviados($declaracion->domicilio, false);
//            experiencias_laborales
            self::MarcarEnviados($declaracion->experiencias_laborales, true);
//            inversiones_cuentas
            self::MarcarEnviados($declaracion->inversiones_cuentas, true);
//            datos_curriculares
            self::MarcarEnviados($declaracion->datos_curriculares, true);
//            vehiculos
            self::MarcarEnviados($declaracion->vehiculos, true);
//            BienesMuebles
            self::MarcarEnviados($declaracion->BienesMuebles, true);
//            pareja
            self::MarcarEnviados($declaracion->pareja, false);
//            datos_empleo_declarante
            self::MarcarEnviados($declaracion->datos_empleo_declarante, false);
//            apoyo_beneficio
            self::MarcarEnviados($declaracion->experiencias_laborales, true);
//            DependienteEconomicos
            self::MarcarEnviados($declaracion->apoyo_beneficio, true);
//            participacion_empresas
            self::MarcarEnviados($declaracion->participacion_empresas, true);
//            clientes
            self::MarcarEnviados($declaracion->clientes, true);
//            participacion
            self::MarcarEnviados($declaracion->participacion, true);
//            prestamosComodato
            self::MarcarEnviados($declaracion->prestamosComodato, true);
//            adeudos_pasivos
            self::MarcarEnviados($declaracion->adeudos_pasivos, true);
//            fueServidorPublico
            self::MarcarEnviados($declaracion->fueServidorPublico, false);
//            fideicomisos
            self::MarcarEnviados($declaracion->fideicomisos, true);
//            representacion
            self::MarcarEnviados($declaracion->representacion, true);
//            bienes_inmuebles
            self::MarcarEnviados($declaracion->bienes_inmuebles, true);
//            donativos
            self::MarcarEnviados($declaracion->donativos, true);
//            intereses
            self::MarcarEnviados($declaracion->intereses, true);
//            ingresos
            self::MarcarEnviados($declaracion->ingresos, false);
//            cambioDependencias
            self::MarcarEnviados($declaracion->cambioDependencias, false);
//            CambioDomicilios
            self::MarcarEnviados($declaracion->CambioDomicilios, false);
//            CambioDatosEncargos
            self::MarcarEnviados($declaracion->CambioDatosEncargos, false);
//            participaciones
            self::MarcarEnviados($declaracion->participaciones, true);
//            viajes
            self::MarcarEnviados($declaracion->viajes, true);
            DB::commit();
            return $declaracion;
        }catch (Exception $e){
            DB::rollBack();
            return null;
        }
        
    }
    public static function MarcarEnviados($colleccion,$multiple){
        if($multiple){
            foreach($colleccion as $item){
                if($item->enviado && $item->tipo_operacion_id == 1){
                    $item->update(["tipo_operacion_id" => 3]);
                }
                $item->update(["enviado" => true]);
            }
        }else{
            if($colleccion != null){
                if($colleccion->enviado && $colleccion->tipo_operacion_id == 1){
                    $colleccion->update(["tipo_operacion_id" => 3]);
                }
                $colleccion->update(["enviado" => true]);
            }
        }
    }
}
