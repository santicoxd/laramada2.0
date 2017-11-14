<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Santiago Carvajal y Alexis Ortiz">

    <link rel="icon" type="image/gif" href="{{asset('img/unal.png')}}" />
    
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <script src="{{asset('js/login.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <title>Ramada App - @yield('title')</title>

    @section('head')

    @show
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <div class="row">
                <div class="col-xs-10 col-md-12">
                    <a class="navbar-brand" href="#">Aplicación informativa  de La Ramaaada</a>
                </div>
                <div class="col-xs-2">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                
                </div>
            </div>
                
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{url('/logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                @else
                <li><a data-toggle="modal" data-target="#modalLogin"><i class="fa fa-sign-in"></i> Login </a></li>
                @endif
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                
                <ul class="nav navbar-nav side-nav">
                    <li  class="side-nav-item" id="side-nav-home">
                        <a href="{{url('/home')}}"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>

                    <li class="side-nav-item"  id="side-nav-mapa">
                        <a href="{{url('/mapa')}}"><i class="fa fa-fw fa-map-marker"></i> Mapa</a>
                    </li>

                    @if(Auth::check())
                    <li class="side-nav-item" id="side-nav-datos">
                        <a href="{{url('/datos')}}"><i class="fa fa-fw fa-database"></i> Administrar Información</a>
                    </li>
                    @endif
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li class="side-nav-item" >
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li class="side-nav-item" >
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">                    

                    <div class="col-lg-12 col-md-12">
                        <h1 class="page-header">
                            <!-- Dashboard <small>Statistics Overview</small> -->
                            @yield('header')
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <!-- <i class="fa fa-dashboard"></i> Dashboard-->
                                @yield('breadcrumb')
                                
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->   

                @yield('content')                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

    <div id="modalLogin" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" action="/login">
                {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><strong> Ingreso como Administrador </strong></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input required type="email" class="form-control" id="email" placeholder="Correo Electrónico" name="email">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Contraseña:</label>
                        <input  required type="password" class="form-control" name="pwd">
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="remember" > Recordarme</label>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-log-in"></span> Ingresar
                    </button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <div id="modalError" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><strong> Error! </strong></h4>
                </div>
                <div class="modal-body">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <div class="row">
                            <div class="col-md-1">
                                <strong>Error!</strong>                                
                            </div>
                            <div class="col-md-11">
                                <ul id="listaDeErrores">
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach        
                                </ul>                                 
                            </div>
                        </div>


                    </div>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
                </div>

            </div>

        </div>
    </div>

</body>
</html>