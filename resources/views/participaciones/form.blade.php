<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion.[nombre]', 'Nombre (s): *') !!}</strong>
        {!! Form::text('participacion[nombre]',isset($participacion) ? $participacion->nombre : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[primer_apellido]', 'Primer apellido: *') !!}</strong>
        {!! Form::text('participacion[primer_apellido]',isset($participacion) ? $participacion->primer_apellido : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('participacion[segundo_apellido]', 'Segundo apellido:') !!}</strong>
        {!! Form::text('participacion[segundo_apellido]',isset($participacion) ? $participacion->segundo_apellido : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
