@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>¿Te desempeñaste como servidor público?</h1>
        </div>
        <div class="card-body">
            @include('TeDesempeñasteComoServidorPublico.form')
        </div>
    </div>
</div>
@endsection



