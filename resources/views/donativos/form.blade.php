<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('donativos.tipo_donativos_id', 'Tipos de Donativos: *') !!}</strong>
        {!! Form::select('donativos[tipo_donativos_id]',$tipoDonativo, (isset($donativo->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipo_donativo_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('donativos.titular_id', 'Titular que los realizó: *') !!}</strong>
        {!! Form::select('donativos[titular_id]',$tipoTitular, (isset($donativo->titular_id)) ? $donativo->titular_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'titular-realiza']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 especifique-dependientes">
        <strong>{!! Form::label('donativos.especifique_dependiente', 'Especifique: *') !!}</strong>
        {!! Form::text('donativos[especifique_dependiente]', (isset($donativo->especifique_dependiente)) ? $donativo->especifique_dependiente : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'especifique-dependientes', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 especifique-fundaciones">
        <strong>{!! Form::label('donativos.especifique_fundacion', 'Especifique: *') !!}</strong>
        {!! Form::text('donativos[especifique_fundacion]', (isset($donativo->especifique_fundacion)) ? $donativo->especifique_fundacion : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'especifique-fundaciones', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
  <div class="form-group col-md-4">
      <strong>{!! Form::label('donativos.forma_recepcion_id', 'Forma de recepción del donativo; *') !!}</strong>
      {!! Form::select('donativos[forma_recepcion_id]',$formaRecepcion, (isset($donativo->forma_recepcion_id)) ? $donativo->forma_recepcion_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'forma-recepcion']) !!}
      <span class="text-danger" style="font-size:150%"></span>
  </div>
  <div class="form-group col-md-4">
      <strong>{!! Form::label('donativos.especifique_otro', 'Especifique otro:') !!}</strong>
      {!! Form::text('donativos[especifique_otro]', (isset($donativo->especifique_otro)) ? $donativo->especifique_otro : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'especifique-otro', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
      <span class="text-danger" style="font-size:150%"></span>
  </div>
  <div class="form-group col-md-4">
      <strong>{!! Form::label('donativos.especifique_donativo', 'Especifique el donativo; *') !!}</strong>
      {!! Form::text('donativos[especifique_donativo]', (isset($donativo->especifique_donativo)) ? $donativo->especifique_donativo : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'tipo_donativo_id', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
      <span class="text-danger" style="font-size:150%"></span>
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-4">
      <strong>{!! Form::label('donativos.monto_donativo', 'Monto aproximado del donativo; *') !!}</strong>
      {!! Form::number('donativos[monto_donativo]', (isset($donativo->monto_donativo)) ? $donativo->monto_donativo : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'tipo_donativo_id']) !!}
      <span class="text-danger" style="font-size:150%"></span>
  </div>
  <div class="form-group col-md-4">
      <strong>{!! Form::label('donativos.tipo_mondeda_id', 'Tipo de moneda: *') !!}</strong>
      {!! Form::select('donativos[tipo_mondeda_id]', $tipoMoneda, (isset($donativo->tipo_mondeda_id)) ? $donativo->tipo_mondeda_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipo_donativo_id']) !!}
      <span class="text-danger" style="font-size:150%"></span>
  </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('donativos.observaciones', 'Aclaraciones / Observaciones:  *') !!}</strong>
        {!! Form::textarea('donativos[observaciones]', isset($donativo->observaciones) ? $donativo->observaciones : null, ['class'=>'form-control alert-danger  text-uppercase']) !!}
        <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
    </div>
</div>
@section("scripts")
  <script type="text/javascript">
    $(document).ready(function(){
      $(".especifique-fundaciones").hide();
      $(".form-control").prop("required", true);
      $(".especifique-dependientes").find("input").prop("readOnly", true);
      $("#especifique-otro").prop("readOnly", true);
      $("#titular-realiza").change(function(){
        let val = $(this).val();
        if(val === "7"){
          $(".especifique-dependientes").show();
          $(".especifique-dependientes").find("input").prop("readOnly", false).prop("required", true);
          $(".especifique-fundaciones").hide();
          $(".especifique-fundaciones").find("input").prop("readOnly", true).prop("required", false).val("")

        } else if (val === "20") {
          $(".especifique-dependientes").hide();
          $(".especifique-dependientes").find("input").prop("readOnly", true).prop("required", false);
          $(".especifique-fundaciones").show();
          $(".especifique-fundaciones").find("input").prop("readOnly", false).prop("required", true).val("");
        } else{
          $(".especifique-dependientes").show();
          $(".especifique-dependientes").find("input").prop("readOnly", true).prop("required", false).val("");
          $(".especifique-fundaciones").hide();
          $(".especifique-fundaciones").find("input").prop("readOnly", true).prop("required", false).val("");
        }
      });
      $("#forma-recepcion").change(function(){
        let val = $(this).val();
        if(val === "3"){
          $("#especifique-otro").prop("readOnly", false).prop("required", true);
        } else{
          $("#especifique-otro").prop("readOnly", true).prop("required", false).val("");
        }
      });
      @isset($donativo)
        $("#titular-realiza").change();
        $("#forma-recepcion").change();

      @endisset
    });

  </script>
@endsection
