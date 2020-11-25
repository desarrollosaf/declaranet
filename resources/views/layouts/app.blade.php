<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Diego Velázquez">
    <meta name="description" content="Plantilla plem">
    <title>Plantilla plem</title>
    <link rel="shortcut icon" href="{{url('img/LXlegis.jpg')}}"/>
    <!-- Bootstrap Css -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Hoja de estilos -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

</head>
<body>
<div class="d-flex" id="content-wrapper">
    <!-- Sidebar -->
    <div id="sidebar-container" class="bg-light border-right">
        <div class="logo">
            <div class="text-center mt-3">
                <img src="{{asset('img/Logoplem.png')}}" class="image align-content-center" width="80%">
                <h5 class="text-center text-light mt-2">Declaranet</h5>
            </div>
        </div>
        <div class="menu list-group-flush">
            <a href="" class="nav-tabs nav-link text-light ml-2"><i class="ion ion-ios-book mr-2"></i>Declaración de situación patrimonial</a>
        </div>
        <div class="menu list-group-flush">
            <a href="{{route('datos_declarante.create')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-person mr-2"></i>Datos generales</a>
            <a href="{{route('domicilio_declarante.index')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-home mr-2"></i>Domicilio declarante</a>
            <a href="{{route('datos_curriculares_declarante.create')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-ribbon-a mr-2"></i>Datos curriculares</a>
            <a href="{{route('datos_empleo_declarante.create')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-briefcase mr-2"></i>Datos empleo</a>
            <a href="{{route('experiencia_laboral.index')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-briefcase mr-2"></i>Experiencia laboral</a>
            <a href="{{route('datos_pareja_declarante.create')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-person-stalker mr-2"></i>Datos de la pareja</a>
            <a href="{{route('datos_dependiente_declarante.create')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-person-add mr-2"></i>Datos de los dependientes</a>
            <a href="{{route('ingreso_neto.create')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-cash mr-2"></i>Ingresos netos</a>
            <a href="{{route('servidor_publico.create')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-cash mr-2"></i>¿Te desempeñaste como servidor público?</a>
            <a href="{{route('bienes_inmuebles.index')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-cash mr-2"></i>Bienes inmuebles</a>
            <a href="{{route('vehiculos.index')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-cash mr-2"></i>Vehiculos</a>
            <a href="{{route('bienes_muebles.index')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-cash mr-2"></i>Bienes Muebles</a>
            <a href="{{route('inversiones.index')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-cash mr-2"></i>Inversiones, cuentas bancarias</a>
            <a href="{{route('adeudos.index')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-cash mr-2"></i>Adeudos / Pasivos</a>
            <a href="{{route('prestamos.index')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-cash mr-2"></i>Prestamo o comodato a terceros</a>

        </div>
    </div>
    <!-- Fin sidebar -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="w-100 bg-light-blue">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
                <button class="btn border-light text-light" id="menu-toggle">
                    <i class="ion ion-android-menu"></i>
                </button>
                <div class="btn-group">
                    <button type="button" class="btn text-light dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="ion ion-person"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button"><i class="ion ion-person"></i> Perfil</button>
                        <button class="dropdown-item" type="button" onclick="cerrarSesion(event)"><i class="ion ion-power"></i> Cerrar sesion</button>
                    </div>
                </div>
            </div>
        </nav>

        <div id="content" class="container-fluid p-5">
            <section class="py-3">
                @yield('content')
            </section>
        </div>
    </div>
    <!-- Fin Page Content -->
</div>
<!-- Fin wrapper -->
<form id="logout-formm" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<!-- Bootstrap y JQuery -->
<script src="{{asset('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('sweet::alert')

<!-- Abrir / cerrar menu -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#content-wrapper").toggleClass("toggled");
    });
    function cerrarSesion(event){
        event.preventDefault();
        $("#logout-formm").submit();
    }
</script>
@yield("scripts")
</body>

</html>
