<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="{{url('img/LXlegis.jpg')}}"/>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>

<style>
    :root {
        --primary: #682244;
        --light: #FFFFFF;
        --grey: #eFeFeF;
        --light-blue: #F5F6FA;
    }

    h1, h2, h3, h4, h5, h6 {
        color: var(--primary);
        font-weight: 700;
    }

    .text-muted {
        color: var(--primary) !important;
        opacity: .7;
    }

    .bg-light {
        background-color: var(--primary) !important;
    }

    .bg-light-blue {
        background-color: var(--light-blue) !important;
    }

    .shadow-sm {
        box-shadow: 0 0 1.25rem rgba(11, 37, 75, .05);
    }

    .shadow-hover {
        transition: 1s ease-in-out;
    }

    .shadow-hover:hover {
        transition: 1s ease-in-out;
        box-shadow: 0 .5rem 1rem rgba(11, 37, 75, .10) !important;
    }

    .circle {
        width: 50px;
        height: 50px;
    }

    .badge {
        padding: .5rem 1rem;
    }

    .bg-primary, .badge-primary {
        background-color: rgba(0, 123, 255, .1) !important;
    }

    .avatar {
        max-width: 35px;
    }

    .btn-primary {
        background-color: rgba(0, 123, 255, .1) !important;
        border: 0;
    }

    .btn-primary:hover {
        background-color: rgba(0, 123, 255, .2) !important;
    }

    .badge-secondary {
        background-color: var(--grey);
        color: var(--primary);
    }

    #content {
        overflow-y: auto;
        height: 100vh;
    }

    table {
        border-collapse: separate;
        border-spacing: 0 .5rem;
    }

    table thead th {
        border: 0 !important;
        background-color: var(--primary);
    }

    table tbody tr {
        background-color: var(--light);
    }

    table tbody td {
        border-top: 0 !important;
        line-height: 1.2;
    }

    /*---------------------------------
    sidebar
    ----------------------*/

    #sidebar-wrapper {
        z-index: 1000;
        height: 100%;
        width: 0px;
        left: -50px;
        overflow-y: auto;
        overflow-x: hidden;
        background: #682244;
        transition: all 0.5s ease;
    }

    #sidebar-wrapper::-webkit-scrollbar {
        width: 8px;
        background: #682244;
    }

    #sidebar-wrapper::-webkit-scrollbar-thumb {
        background-color: #989898;
        border-radius: 10px;
    }


    .sidebar-brand {
        font-weight: 600;
        font-size: 1.15rem;
        padding: 1.15rem 1.5rem;
        display: block;
        color: #f8f9fa;
    }

    .sidebar-header {
        text-transform: capitalize;
        padding: 1.5rem 1.5rem .375rem !important;
        font-size: 14px;
        color: #ced4da;
    }

    .navbar-nav > li > a, .submenu-box ul li a {
        color: white !important;
        font-size: 14px;
        padding: 10px 10px 10px 20px !important;
        display: block;
        font-weight: 400;
        position: relative;
        z-index: 2;
        font-family: 'Roboto', sans-serif;
        letter-spacing: .2px;
    }

    .submenu-box ul li a {
        padding: 4px 10px 4px 20px !important;
        color: #c1c1c1 !important;
    }


    .navbar-nav > li > a.active {
        color: #e9ecef !important;
        background: #682244;
        border-left: 4px solid white;
    }

    .navbar-nav .has-sub > a.collapsed::after {
        transition: 0.4s ease;
    }

    .navbar-nav .has-sub > a.collapsed::after {
        color: white;
        font-size: 10px;
        content: "\f078";
    }

    .navbar-nav .has-sub > a.collapsed::after {
        color: white;
    }

    .navbar-nav .has-sub > a::after {
        position: absolute;
        right: 0px;
        top: 50%;
        height: 30px;
        width: 30px;
        text-align: center;
        color: white;
        display: block;
        content: "\f077";
        font-family: 'Font Awesome\ 5 Free';
        font-weight: 900;
        font-size: 13px;
        line-height: 30px;
        margin-top: -15px;
    }


    #wrapper.toggled {
        padding-left: 270px;
    }


    .toggled#sidebar-wrapper {
        width: 270px !important;
        height: 100%;
        left: 0px;
        overflow-y: auto;
        overflow-x: hidden;
        transition: all 0.5s ease;
    }

    .navbar-nav li {
        display: block !important;
        margin: 2px 0px;
    }


    .nav-item .nav-link {
        display: block;
        color: white !important;
        text-transform: capitalize;
        text-decoration: none;
        padding: 6px 10px;
        transition: 0.4s ease;
    }

    .navbar-nav > li > a i:before {
        margin: 0px 5px 0px 0px;
        font-size: 14px;
    }


    /*---------------------------------
    sidebar
    ----------------------*/


    /*---------------------------------
      main-content
    ----------------------*/

    #page-content-wrapper {
        width: 100%;
        transition: all 0.5s ease;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -270px;

        transition: all 0.5s ease;
    }

    .toggled#page-content-wrapper {
        margin-left: 270px;
        transition: all 0.5s ease;
    }

    @media only screen and (min-width: 992px) {
        .toggled#page-content-wrapper {
            width: calc(100% - 270px);
        }
    }

    /*---------------------------------
      main-content
    ----------------------*/


    /*---------------------------------
    cross-bar animation
    ----------------------*/


    .nav-icon1 {
        z-index: 999;
        position: relative;
        display: block;
        width: 23px;
        margin: 0px 30px 0px 25px;
        cursor: pointer;
        height: 25px;
    }


    .nav-icon1 span {
        position: absolute;
        top: 0;
        width: 100%;
        height: 3px;
        cursor: pointer;
        background-color: #682244;
        left: 0;
        transform: rotate(0deg);
        transition: .30s ease-in-out;
    }

    .nav-icon1:hover span:nth-of-type(1) {
        top: -3px
    }

    .nav-icon1:hover span:nth-of-type(3) {
        top: 19px;
    }

    .nav-icon1 span:nth-of-type(1) {
        top: 0;
    }

    .nav-icon1 span:nth-of-type(2) {
        top: 8px;
    }

    .nav-icon1 span:nth-of-type(3) {
        top: 16px;
    }

    .nav-icon1.open span:nth-of-type(1) {
        top: 8px;
        transform: rotate(135deg);
    }

    .nav-icon1.open span:nth-of-type(2) {
        top: 8px;
        opacity: 0;
        left: -30px;
    }

    .nav-icon1.open span:nth-of-type(3) {
        top: 8px;
        transform: rotate(-135deg);
    }


    /*---------------------------------
    cross-bar animation
    ----------------------*/


    /*---------------------------------
    header navbar design
    ----------------------*/
    .my-navbar {
        padding: 0px;
        background-color: #682244;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .16);
    }

    .text-white-600 {
        color: #858796 !important;
    }

    .nav-link .img-profile {
        height: 40px;
        width: 40px;
    }

    .navbar-nav > li > a > i {
        font-size: 18px;
        color: #b3b3b3;
        margin: 8px 0px 0px 0px;
        padding: 0px;
    }

    .badge-counter {
        position: absolute;
        transform: scale(.7);
        transform-origin: top right;
        right: 6px;
        margin-top: 4px;
    }


    .dropdown, .dropleft, .dropright, .dropup {
        position: relative;
    }

    .nav-flag, .nav-icon {
        padding: .1rem .8rem;
        display: block;
        font-size: 1.5rem;
        color: #6c757d;
        transition: background .1s ease-in-out, color .1s ease-in-out;
        line-height: 1.4;
    }


    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-nav .dropdown-menu {
        box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, .05);
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none;
    }

    .dropdown-menu-lg {
        min-width: 20rem;
    }


    .position-relative {
        position: relative !important;
    }

    .nav-item .indicator {
        background: #3b7ddd;
        box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, .05);
        border-radius: 50%;
        display: block;
        height: 18px;
        width: 18px;
        padding: 1px;
        position: absolute;
        top: 0;
        right: -8px;
        text-align: center;
        transition: top .1s ease-out;
        font-size: .675rem;
        color: #fff;
    }

    /*---------------------------------
     header navbar design
    ----------------------*/


    /*---------------------------------
    main-top card
    ----------------------*/

    .card {
        margin-bottom: 24px;
        border: none;
        box-shadow: 0 0 0.875rem 0 rgba(33, 37, 41, .05);
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }

    .card-title {
        font-size: .875rem;
        color: #495057;
    }

    .card-body h1 {
        font-size: 1.75rem;
        font-weight: 400;
        line-height: 1.2;
        color: #000;
    }


    .text-white-800 {
        color: #5a5c69 !important;
        font-size: 1.75rem;
        font-weight: 400;
        line-height: 1.2;
    }

    .shadow-sm {
        box-shadow: 0 .125rem .25rem 0 rgba(58, 59, 69, .2) !important;
    }


    .btn-sm {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
    }


    .font-16 {
        font-size: 16px;
    }


    /*---------------------------------
    main-top card
    ----------------------*/


    /*---------------------------------
    main-table
    ----------------------*/


    .m-r-10 {
        margin-right: 10px;
    }

    .btn-submit {
        background-color: var(--primary);
    }

</style>
<body>
<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
        <div class="simplebar-content" style="padding: 0px;">
            <div class="logo">
                <div class="text-center mt-3">
                    <img src="{{asset('img/NLogo.png')}}" class="image align-content-center" width="90%">
                    <h5 class="text-center text-light mt-2">Declaranet</h5>
                </div>
            </div>

            <ul class="navbar-nav align-self-stretch">
                <li class="has-sub">
                    <a class="nav-link collapsed text-left" href="#collapseExample2" role="button"
                       data-toggle="collapse">
                        <strong>Declaración de Situación <br>Patrimonial</strong>
                    </a>
                    <div class="collapse menu mega-dropdown" id="collapseExample2">
                        <div class="dropmenu" aria-labelledby="navbarDropdown">
                            <div class="container-fluid ">
                                <div class="row">
                                    <div class="col-lg-12 px-2">
                                        <div class="submenu-box">
                                            <ul class="list-unstyled m-0">
                                                <div class="menu list-group-flush">
                                                    <a href="{{route('datos_declarante.create')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-person mr-2"></i>Datos generales</a>
                                                    <a href="{{route('domicilio_declarante.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-home mr-2"></i>Domicilio declarante</a>
                                                    <a href="{{route('datos_curriculares_declarante.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-ribbon-a mr-2"></i>Datos curriculares</a>
                                                    <a href="{{route('datos_empleo_declarante.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-briefcase mr-2"></i>Datos empleo</a>
                                                    <a href="{{route('experiencia_laboral.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-briefcase mr-2"></i>Experiencia laboral</a>
                                                    <a href="{{route('datos_pareja_declarante.create')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-person-stalker mr-2"></i>Datos de la
                                                        pareja</a>
                                                    <a href="{{route('datos_dependiente_declarante.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-person-add mr-2"></i>Datos de los
                                                        dependientes</a>
                                                    <a href="{{route('ingreso_neto.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-cash mr-2"></i>Ingresos netos</a>
                                                    <a href="{{route('servidor_publico.create')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-cash mr-2"></i>¿Te desempeñaste como servidor
                                                        público?</a>
                                                    <a href="{{route('bienes_inmuebles.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-cash mr-2"></i>Bienes inmuebles</a>
                                                    <a href="{{route('vehiculos.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-cash mr-2"></i>Vehículos</a>
                                                    <a href="{{route('bienes_muebles.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-cash mr-2"></i>Bienes Muebles</a>
                                                    <a href="{{route('inversiones.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-cash mr-2"></i>Inversiones, cuentas bancarias</a>
                                                    <a href="{{route('adeudos.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-cash mr-2"></i>Adeudos / Pasivos</a>
                                                    <a href="{{route('prestamos.index')}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-cash mr-2"></i>Préstamo o comodato a terceros</a>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="has-sub">
                    <a class="nav-link collapsed text-left" href="#collapseExample3" role="button"
                       data-toggle="collapse">
                        <strong>Declaración de Intereses</strong>
                    </a>
                    <div class="collapse menu mega-dropdown" id="collapseExample3">
                        <div class="dropmenu" aria-labelledby="navbarDropdown">
                            <div class="container-fluid ">
                                <div class="row">
                                    <div class="col-lg-12 px-2">
                                        <div class="submenu-box">
                                            <ul class="list-unstyled m-0">
                                                <div class="menu list-group-flush">
                                                    <a href="{{route("participacion_empresas.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-person mr-2"></i>Participación económica o
                                                        financiera en empresas</a>
                                                    <a href="{{route("participacion.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-ribbon-a mr-2"></i>¿Participa en la toma de
                                                        decisiones de alguna de estas instituciones?</a>
                                                    <a href="{{route("apoyo_beneficio.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-briefcase mr-2"></i>Apoyo o beneficio
                                                        públicos</a>
                                                    <a href="{{route("representacion.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-briefcase mr-2"></i>Representación</a>
                                                    <a href="{{route("clientes_principales.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-person-stalker mr-2"></i>Clientes principales</a>
                                                    <a href="{{route("beneficios_privados.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-person-add mr-2"></i>Beneficios privados</a>
                                                    <a href="{{route("fideicomisos.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-cash mr-2"></i>Fideicomisos</a>
                                                    <a href="{{route("donativos.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-cash mr-2"></i>Donativos</a>
                                                    <a href="{{route("intereses_personales.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-android-person mr-2"></i>Intereses personales</a>
                                                    <a href="{{route("participaciones.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-android-people mr-2"></i>Participaciones</a>
                                                    <a href="{{route("viajes.index")}}"
                                                       class="nav-tabs nav-link text-light ml-4 mr-3"><i
                                                            class="ion ion-plane mr-2"></i>Viajes</a>

                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="" class="nav-link">
                        <i class="ion-android-exit text-light text-lg-left"></i>
                        <strong>Salir de la declaración</strong>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div id="content">
            <div class="container-fluid p-0 px-lg-0 px-md-0">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light my-navbar">
                    <!-- Sidebar Toggle (Topbar) -->
                    <div type="button" id="bar" class="ml-4 btn btn-lg"
                         data-toggle="offcanvas">
                        <i class="ion ion-android-menu btn-lg text-light"></i>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle btn-lg text-light" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="ion ion-person"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button"><i class="ion ion-person"></i> Perfil
                                </button>
                                <button class="dropdown-item" type="button" onclick="cerrarSesion(event)"><i
                                        class="ion ion-power"></i> Cerrar sesion
                                </button>
                            </div>
                        </div>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div id="content" class="container-fluid p-5">
                    <section class="py-3">
                        @yield("content")
                    </section>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<form id="logout-formm" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<!-- Bootstrap y JQuery -->
<script src="{{asset('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('sweet::alert')

<script type="text/javascript">
    $(document).ready(function () {
        $('#bar').click(function () {
            $(this).toggleClass('close');
            $('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled');
        });
        $('#bar').click();
        $(".form-control").keyup(function () {
            let val = $(this).val();
            $(this).val(val.toString().toUpperCase());
        });
    });

    function cerrarSesion(event) {
        event.preventDefault();
        $("#logout-formm").submit();
    }
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
@yield("scripts")
</body>
</html>
