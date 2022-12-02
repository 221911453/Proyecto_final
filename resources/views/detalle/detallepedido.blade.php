<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administracion / El Tigre</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
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
                    <a class="navbar-brand" href="#"></i>&nbsp;"EL TIGRE"</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Cerrar sesion</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <center><img src="{{asset('assets/img/ti.png')}}" width="150" class="img-responsive" /></center>

                    </li>
                    <li>
                        <a href="{{route('indexadmin')}}"><i class="fa fa-desktop "></i>Usuarios</a>
                    </li>

                    <li>
                        <a href="{{route('indexadmin')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                          </svg>REGRESAR</a>
                    </li>


            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Detalle del pedido</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">

                    <div class="col-md-6">
                    <center>
                       
                        <div class="card mb-1" style="max-width: 540px;">
                            @foreach($pedidos as $ped)
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="{{asset('assets/img/pedidos.png')}}" class="img-fluid rounded-start" alt="..."  width="150">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>No. Pedido</strong> &nbsp; {{ $ped->id_pedido }}</h5>
                                  <p class="card-text"><strong>Usuario</strong> &nbsp;{{$ped->user}}</p>
                                  <p class="card-text"><strong>Producto</strong> &nbsp;{{$ped->producto}}</p>
                                  <p class="card-text"><strong>Cantidad</strong> &nbsp;{{$ped->cantidad}}</p>
                                  <p class="card-text"><strong>Total</strong> &nbsp;${{$ped->total}}</p>
                                  <p class="card-text"><small class="text-muted"><strong>Fecha</strong> &nbsp;{{$ped->created_at}}</small></p>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </div>
                    </center>
                    </div>

                </div>
               
                <hr />
                </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>


</body>
</html>
