<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administracion / El Tigre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>


    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></i>&nbsp;" Fabrica de Lavaderos - EL TIGRE "</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('logout')}}">Cerrar sesion</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <center><img src="images/tiger.jpg" width="400" class="img-responsive" /></center>

                    </li>

                    <li>
                        <a href="{{route('indexadmin')}}"><i class="fa fa-desktop "></i>Administradores</a>
                    </li>


                    <li>
                        <a href="{{route('admin/tablapedido')}}"><i class="fa fa-table "></i>Pedidos</a>
                    </li>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Bienvenido: <strong> {{session('session_name')}} {{session('session_app')}}</strong></h2>
                    </div>
                </div>
                <hr>


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-default">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <strong>Nuevo usuario</strong>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form id="addUser" class="" method="POST" action="">
                        <div class="form-group">
                            <label for="first_name" class="col-md-12 col-form-label">Nombre</label>

                            <div class="col-md-12">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="" required autofocus>
                                <br></div>
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="col-md-12 col-form-label">Apellidos</label>

                            <div class="col-md-12">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="" required autofocus>
                                <br> </div>
                        </div>

                        <div class="form-group">
                            <label for="empSalary" class="col-md-12 col-form-label">Dirección</label>

                            <div class="col-md-12">
                                <input id="empSalary" type="text" class="form-control" name="empSalary" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 "><br>
                                <button type="button" class="btn btn-primary btn-block desabled" id="submitUser">
                                    Crear
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <strong>Usuarios</strong>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Dirección</th>
                            <th width="180" class="text-center">Acción</th>
                        </tr>
                        <tbody id="tbody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<form action="" method="POST" class="Employees-remove-record-model">
    <div id="remove-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Borrar usuario</h4>
                    <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>¿Seguro que desea borrar el usuario?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light deleteMatchRecord">Borrar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Update Model -->
<form action="" method="POST" class="Employees-update-record-model form-horizontal">
    <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content" style="overflow: hidden;">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Actualizar usuario</h4>
                    <button type="button" class="close update-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body" id="updateBody">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect update-data-from-delete-form" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success waves-effect waves-light updateUserRecord">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    var config = {
        apiKey: "AIzaSyD-ezhNZqtHKLLhA3wlOyVhRbxE2lSXjDE",
  authDomain: "proyecto-ijl.firebaseapp.com",
  databaseURL: "https://proyecto-ijl-default-rtdb.firebaseio.com",
  projectId: "proyecto-ijl",
  storageBucket: "proyecto-ijl.appspot.com",
  messagingSenderId: "589484223847",
  appId: "1:589484223847:web:2f36ad9d071406947613c2",
  measurementId: "G-RFH3H8ZC71"
    };

    firebase.initializeApp(config);
    var database = firebase.database();
    var lastIndex = 0;
</script>
<script src="./js/fb_crud.js"></script>


<br>
                <hr />
                  <div class="row">
                    <div class="col-md-12" >
                        <h5><strong>Aviso de privacidad</strong></h5>

                        <p>Encargado del Sitio Web tiene Acceso a la Información Pública y Protección de Datos Personales del Sitio Web y el área administrativo son los únicos responsables del manejo de los datos personales que nos proporcione.</p>

                        <p>Su información privada será utilizada para las siguientes finalidades:</p>

                        <p>Registrar los productos que haya seleccionado.</p>
                        <p>Generar listas de los estatus del pedido y validación de los pedidos.</p>
                        <p>Comunicación en caso de cualquier duda, inconveniente o emergencia.</p>
                        <p>De manera adicional, utilizaremos su información personal para las siguientes finalidades que, aunque no son del todo necesarias, nos permiten y facilitan brindarle una mejor atención, como el envío de material de exposición y las invitaciones a futuros eventos. En caso de que no desee que sus datos personales sean tratados para esto, puede manifestarlo en el correo electrónico fabricadelavaderos.eltigre@gmail.com.</p>

                        </div>
                </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
