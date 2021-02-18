<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion.[nombre]', 'Nombre (s): *') !!}</strong>
        {!! Form::text('participacion[nombre]',isset($participacion) ? $participacion->nombre : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P.EJ.CARLOS',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[primer_apellido]', 'Primer apellido: *') !!}</strong>
        {!! Form::text('participacion[primer_apellido]',isset($participacion) ? $participacion->primer_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Pérez',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[segundo_apellido]', 'Segundo apellido:') !!}</strong>
        {!! Form::text('participacion[segundo_apellido]',isset($participacion) ? $participacion->segundo_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Pérez',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[fecha de nacimiento]', 'Fecha de nacimiento:*') !!}</strong>
        {!! Form::date('participacion[fecha_nacimiento]',isset($dependiente) ? $dependiente->fecha_nacimiento : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'nacimiento','required' => true,'max' => date('Y-m-d')]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[RFC]', 'RFC:*') !!}</strong>
        {!! Form::text('participacion[rfc]',isset($participacion) ? $participacion->rfc : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc','required' => true,'pattern'=>'([A-ZÑ&]{4}\d{6}[A-Z\d]{3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[participaciones economicas]', 'Participaciones economicas:*') !!}</strong>
        <select class="form-control text-uppercase" id="tipo_titular_donativo_id" name="participacion[tipo_titular_donativo_id]">
            <option value="" data-grado="">Selecciona una opción</option>
            @foreach($tipo_titular as $value)
            @if(isset($participacion))
            @if($value->id == $participacion->tipo_titular_donativo_id)
            <option value="{{$value->id}}" data-grado="{{$value->grado}}" selected="selected">{{$value->valor}}</option>
            @else
            <option value="{{$value->id}}" data-grado="{{$value->grado}}">{{$value->valor}}</option>
            @endif
            @else
            <option value="{{$value->id}}" data-grado="{{$value->grado}}">{{$value->valor}}</option>
            @endif
            @endforeach
        </select>
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Institicion en la que participa ]', 'Institicion en la que participa:*') !!}</strong>
        {!! Form::select('participacion[institucion_participacion_id]',[],isset($participacion) ? $participacion->institucion_participacion_id : null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción','required' => true, 'id' => 'institucion_participacion_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Naturaleza del vinculo  ]', 'Naturaleza del vinculo:*') !!}</strong>
        {!! Form::select('participacion[tipo_participacion_id]',isset($tipo_participacion) ? $tipo_participacion : [],isset($participacion) ? $participacion->tipo_participacion_id : null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Frecuencia anual  ]', 'Frecuencia anual:*') !!}</strong>
        {!! Form::text('participacion[frecuencia_anual]',isset($participacion) ? $participacion->frecuencia_anual: null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.EJ.12',  'id' => 'nombre','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Tipo de persona juridico colectiva ]', 'Tipo de persona jurídica colectiva:*') !!}</strong>
        {!! Form::select('participacion[tipo_organizacion_id]',isset($tipo_organizacion) ? $tipo_organizacion : [],isset($participacion) ? $participacion->tipo_organizacion_id: null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción',  'id' => 'nombre','required' => true,'required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Tipo de colaboración ]', 'Tipo de colaboración:*') !!}</strong>
        {!! Form::select('participacion[tipo_colaboracion_id]',isset($tipo_colaboracion) ? $tipo_colaboracion : [] ,isset($participacion) ? $participacion->tipo_colaboracion_id: null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción',  'id' => 'nombre','required' => true,'required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-12">
        <strong>{!! Form::label('inversiones.aclaraciones_observaciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('participacion[observaciones]',isset($participacion) ? $participacion->observaciones : null,['class'=>'form-control alert-danger',  'id' => 'aclaraciones_observaciones']) !!}
        <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
    </div>
</div>
