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
            <a href="{{route('home')}}" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-person mr-2"></i>Mis declaraciones</a>
            
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
                        <button class="dropdown-item" type="button"><i class="ion ion-person"></i> {{auth()->user()->servidor_publico->nombre}}</button>
                        <button class="dropdown-item" type="button"><i class="ion ion-power"></i> Cerrar sesión</button>
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
    $(document).ready(function(){
        swal({
            title: 'Error',
            text: 'No está configurada la disponibilidad del centro',
            icon: 'warning'
        });
    });
</script>
@yield("scripts")
</body>

</html>