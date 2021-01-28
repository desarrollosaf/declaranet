<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion.[nombre]', 'Nombre (s): *') !!}</strong>
        {!! Form::text('participacion[nombre]',isset($participacion) ? $participacion->nombre : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P.EJ.CARLOS',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[primer_apellido]', 'Primer apellido: *') !!}</strong>
        {!! Form::text('participacion[primer_apellido]',isset($participacion) ? $participacion->primer_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[segundo_apellido]', 'Segundo apellido:') !!}</strong>
        {!! Form::text('participacion[segundo_apellido]',isset($participacion) ? $participacion->segundo_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'nacimiento','required'=> true,'max' => date('Y-m-d')]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[fecha de nacimiento]', 'Fecha de nacimiento:') !!}</strong>
       {!! Form::date('declarante[fecha_nacimiento]',isset($dependiente) ? $dependiente->fecha_nacimiento : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'nacimiento','required' => true,'max' => date('Y-m-d')]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[RFC]', 'RFC:') !!}</strong>
        {!! Form::text('participacion[RFC]',isset($participacion) ? $participacion->RFC : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc','pattern'=>'([A-ZÑ&]{4}\d{6}[A-Z\d]{3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[participaciones economicas]', 'Participaciones economicas:') !!}</strong>
        {!! Form::text('participacion[participaciones_economicas]',isset($participacion) ? $participacion->participaciones_economicas : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Institicion en la que participa ]', 'Institicion en la que participa:') !!}</strong>
        {!! Form::text('participacion[Institicion en la que participa]',isset($participacion) ? $participacion->Institicion_en_la_que_participa : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Naturaleza del vinculo  ]', 'Naturaleza del vinculo:') !!}</strong>
        {!! Form::text('participacion[Institicion en la que participa]',isset($participacion) ? $participacion->Institicion_en_la_que_participa : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Frecuencia anual  ]', 'Frecuencia anual:') !!}</strong>
        {!! Form::text('participacion[Frecuencia anual]',isset($participacion) ? $participacion->Frecuencia_anual: null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Tipo de persona juridico colectiva ]', 'Tipo de persona jurídica colectiva:') !!}</strong>
        {!! Form::text('participacion[Tipo de persona juridico colectiva]',isset($participacion) ? $participacion->Tipo_de_persona_juridico_colectiva: null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Tipo de colaboración ]', 'Tipo de colaboración:') !!}</strong>
        {!! Form::text('participacion[Tipo de colaboración]',isset($participacion) ? $participacion->Tipo_de_colaboración: null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion.[nombre]', 'Nombre del pariente: *') !!}</strong>
        {!! Form::text('participacion[nombre]',isset($participacion) ? $participacion->nombre : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P.EJ.CARLOS',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[primer_apellido]', 'Primer apellido: *') !!}</strong>
        {!! Form::text('participacion[primer_apellido]',isset($participacion) ? $participacion->primer_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[segundo_apellido]', 'Segundo apellido:') !!}</strong>
        {!! Form::text('participacion[segundo_apellido]',isset($participacion) ? $participacion->segundo_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'nacimiento','required'=> true,'max' => date('Y-m-d')]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[fecha de nacimiento]', 'Fecha de nacimiento:') !!}</strong>
        {!! Form::date('declarante[fecha_nacimiento]',isset($dependiente) ? $dependiente->fecha_nacimiento : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'nacimiento','required' => true,'max' => date('Y-m-d')]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[RFC]', 'RFC:') !!}</strong>
        {!! Form::text('participacion[RFC]',isset($participacion) ? $participacion->RFC : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc','pattern'=>'([A-ZÑ&]{4}\d{6}[A-Z\d]{3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Participacion presente o pasada ]', 'Participacion presente o pasada:') !!}</strong>
        {!! Form::text('participacion[Participacion presente o pasada]',isset($participacion) ? $participacion->Participacion_presente_o_pasada : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[Institución]', 'Institución:') !!}</strong>
        {!! Form::text('participacion[Institución]',isset($participacion) ? $participacion->Institución : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
