<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administracion / El Tigre</title>
    <!-- BOOTSTRAP STYLES-->
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

                    <li>
                        <a href="{{route('usuarios')}}"><i class="fa fa-table "></i>Usuarios</a>
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
                <!-- /. ROW  -->
                <hr />
                <div class="row">

                    <div class="col-md-6">
                        <h3><strong>Productos</strong></h3>

                        <div class="nav navbar-nav navbar-right">
                        <form action="{{ route('mostrar') }}" method="get">
                            <input type="text" name="criterio">
                            <input type="submit" value="Buscar">
                          </form>
                        </div>
                        <br><br>
                        <div class="navbar-collapse collapse">
                        <a href="{{route('agregar/agregarproducto')}}" class="text-primary text-gradient font-weight-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clipboard2-plus-fill" viewBox="0 0 16 16">
                                <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                                <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM8.5 6.5V8H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V9H6a.5.5 0 0 1 0-1h1.5V6.5a.5.5 0 0 1 1 0Z"/>
                              </svg>
                        </a>
                        <ul class="nav navbar-nav navbar-right">
                            <a href="{{ route('excel', ['crit' => $crit])}}">
                                <img width="50" height="40" src="imagenes/excel.png" alt=""></a>
                                </ul>
                            </div>
                                <br>
                        @if(isset($productoadms))
                        <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                    <th>Descripcion</th>
                                    <th>Costo</th>
                                    <th>Color</th>
                                    <th>Medida</th>
                                    <th>Material</th>
                                    <th>Dia de registrio</th>
                                    <th>Detalle</th>
                                    <th>Editar</th>
                                    <th>Borrar</th>
                                </tr>
                            </thead>
                            @foreach($productoadms as $productoadm)
                            <tbody>
                                <tr>
                                    <td>{{ $productoadm->id }}</td>
                                    <td>{{ $productoadm->nombre }}</td>
                                    <td><img src="{{asset('imagenes/'.$productoadm->foto)}}" alt="70" width="70"></td>
                                    <td>{{ $productoadm->descripcion }}</td>
                                    <td>{{ $productoadm->costo }}</td>
                                    <td>{{ $productoadm->color }}</td>
                                    <td>{{ $productoadm->medida }}</td>
                                    <td>{{ $productoadm->material }}</td>
                                    <td>{{ $productoadm->created_at }}</td>
                                    <td>
                                        <form >
                                            <a href="{{ route('detalleproducto', ['id'=>$productoadm->id])}}"><center><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                              </svg></center></a>
                                            </form>
                                      </td>
                                    <td><a href="{{route('editar/editarproducto',['id'=>$productoadm->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></a>
                                      </td>
                                    <td><a href="{{ route('borrarproducto', ['id'=>$productoadm->id])}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg></a>
                                  </td>
                                </tr>

                            </tbody>
                  @endforeach
                        </table>
                        @endif
                    </div>

                </div>
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

                        <p >También, se informa que no se realizarán transferencias que requieran su consentimiento, salvo aquellas que sean necesarias para atender requerimientos de información de una autoridad.</p>
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
