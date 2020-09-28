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
</head>
<body>
<div class="d-flex" id="content-wrapper">
    <!-- Sidebar -->
    <div id="sidebar-container" class="bg-light border-right">
        <div class="logo">
            <div class="text-center mt-3">
                <img src="{{asset('img/Logoplem.png')}}" class="image align-content-center" width="80%">
                <h5 class="text-center text-light mt-2">Nombre sistema</h5>
            </div>
        </div>
        <div class="menu list-group-flush">
            <a href="#Menu1" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-folder mr-2"></i>Archivos</a>
            <a href="#Menu2" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-person-stalker mr-2"></i>Usuarios</a>
            <a href="#Menu3" class="nav-tabs nav-link text-light ml-4 mr-3"><i class="ion ion-arrow-swap mr-2"></i>Movimientos</a>
            <a href="#Menu4" class="nav-tabs nav-link text-light ml-4 mr-3"><i
                        class="ion ion-upload mr-2"></i>Cargas</a>
        </div>
    </div>
    <!-- Fin sidebar -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="w-100 bg-light-blue">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom mt-2 ml-2 mr-2">
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
                        <button class="dropdown-item" type="button"><i class="ion ion-power"></i> Cerrar sesion</button>
                    </div>
                </div>
            </div>
        </nav>

        <div id="content" class="container-fluid p-5">
            <section class="py-3">
                <!-- Highlights -->
                <div class="container">
                    <div class="card mb-5 shadow-sm border-0 shadow-hover">
                        <div class="card-header">
                            <h1>Formulario</h1>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4"
                                               placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                           placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                           placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row text-center">
                                    <div class="col">
                                        <button type="submit" class="btn btn-submit text-light text-lg-center col-sm-12 col-md-2">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Fin Page Content -->
</div>
<!-- Fin wrapper -->

<!-- Bootstrap y JQuery -->
<script src="{{asset('js/app.js')}}"></script>

<!-- Abrir / cerrar menu -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#content-wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>