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
        <strong>{!! Form::label('participacion[fecha de nacimiento]', 'Fecha de nacimiento:') !!}</strong>
       {!! Form::date('declarante[fecha_nacimiento]',isset($dependiente) ? $dependiente->fecha_nacimiento : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'nacimiento','required' => true,'max' => date('Y-m-d')]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[RFC]', 'RFC:') !!}</strong>
        {!! Form::text('participacion[rfc]',isset($participacion) ? $participacion->RFC : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc','required' => true,'pattern'=>'([A-ZÑ&]{4}\d{6}[A-Z\d]{3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[participaciones economicas]', 'Participaciones economicas:') !!}</strong>
        {!! Form::select('participacion[tipo_titular_donativo_id]',isset($tipo_titular) ? $tipo_titular : [],isset($participacion) ? $participacion->tipo_titular_donativo_id : null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Institicion en la que participa ]', 'Institicion en la que participa:') !!}</strong>
        {!! Form::select('participacion[tipo_institucion_id]',isset($tipo_institucion) ? $tipo_institucion : [],isset($participacion) ? $participacion->tipo_institucion_id : null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Naturaleza del vinculo  ]', 'Naturaleza del vinculo:') !!}</strong>
        {!! Form::select('participacion[tipo_participacion_id]',isset($tipo_participacion) ? $tipo_participacion : [],isset($participacion) ? $participacion->tipo_participacion_id : null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Frecuencia anual  ]', 'Frecuencia anual:') !!}</strong>
        {!! Form::text('participacion[frecuencia_anual]',isset($participacion) ? $participacion->Frecuencia_anual: null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Tipo de persona juridico colectiva ]', 'Tipo de persona jurídica colectiva:') !!}</strong>
        {!! Form::select('participacion[tipo_organizacion_id]',isset($tipo_organizacion) ? $tipo_organizacion : [],isset($participacion) ? $participacion->tipo_organizacion_id: null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción',  'id' => 'nombre','required' => true,'required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Tipo de colaboración ]', 'Tipo de colaboración:') !!}</strong>
        {!! Form::select('participacion[tipo_colaboracion_id]',isset($tipo_colaboracion) ? $tipo_colaboracion : [] ,isset($participacion) ? $participacion->tipo_colaboracion_id: null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción',  'id' => 'nombre','required' => true,'required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion.[nombre]', 'Nombre del pariente: *') !!}</strong>
        {!! Form::text('participacion[nombre_pariente]',isset($participacion) ? $participacion->nombre_pariente : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P.EJ.CARLOS',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[primer_apellido]', 'Primer apellido: *') !!}</strong>
        {!! Form::text('participacion[primer_apellido_pariente]',isset($participacion) ? $participacion->primer_apellido_pariente : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[segundo_apellido]', 'Segundo apellido:') !!}</strong>
       {!! Form::text('participacion[segundo_apellido_pariente]',isset($participacion) ? $participacion->segundo_apellido_pariente : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[fecha de nacimiento]', 'Fecha de nacimiento:') !!}</strong>
        {!! Form::date('declarante[fecha_nacimiento_pariente]',isset($dependiente) ? $dependiente->fecha_nacimiento_pariente : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'nacimiento','required' => true,'max' => date('Y-m-d')]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[RFC]', 'RFC:') !!}</strong>
        {!! Form::text('participacion[rfc_pariente]',isset($participacion) ? $participacion->rfc_pariente : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc','required' => true,'pattern'=>'([A-ZÑ&]{4}\d{6}[A-Z\d]{3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Participacion presente o pasada ]', 'Participacion presente o pasada:') !!}</strong>
        {!! Form::select('participacion[participacion_id]',isset($tipo_titular_segundo) ? $tipo_titular_segundo : [],isset($participacion) ? $participacion->participacion_id : null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Institución]', 'Institución:') !!}</strong>
        {!! Form::select('participacion[institucion_participacion_id]',isset($tipo_institucion) ? $tipo_institucion : [],isset($participacion) ? $participacion->institucion_participacion_id : null,['class'=>'form-control text-uppercase', 'placeholder'=>'Selecciona una opción',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-12">
        <strong>{!! Form::label('inversiones.aclaraciones_observaciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('participacion[observaciones]',isset($participacion) ? $participacion->observaciones : null,['class'=>'form-control alert-danger',  'id' => 'aclaraciones_observaciones']) !!}
    </div>
</div>
</div>
