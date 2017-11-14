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
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div >
                    <a class="navbar-brand" href="{{url('/home')}}">
                    <img src="{{asset('img/resa_color.png')}}" height="150%">
                    </a>
                    
                </div>
                
                
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                
                <!-- /.dropdown -->
                 @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        
                        <li>
                            <a href="{{url('/logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                @else
                <li><a data-toggle="modal" data-target="#modalLogin"><i class="fa fa-sign-in"></i> Login </a></li>
                @endif
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse collapse" >
                    <ul class="nav" id="side-menu">

                        <li  id="side-nav-home">
                            <a href="{{url('/home')}}"><i class="fa fa-fw fa-home"></i> Home</a>
                        </li>

                        <li   id="side-nav-mapa">
                            <a href="{{url('/mapa')}}"><i class="fa fa-fw fa-map-marker"></i> Mapa</a>
                        </li>

                        @if(Auth::check())
                        <li id="side-nav-datos">
                            <a href="{{url('/datos')}}"><i class="fa fa-fw fa-database"></i> Administrar Información</a>
                        </li>
                        @endif
                        @if(Auth::check())
                        @if(Auth::user()->role == "root")
                        <li id="side-nav-datos">
                            <a href="{{url('/register')}}"><i class="fa fa-fw fa-user"></i> Registrar nuevo administrador</a>
                        </li>
                        <li id="side-nav-datos">
                            <a href="{{url('/adm')}}"><i class="fa fa-fw fa-user"></i> Administrar Contenido</a>
                        </li>
                        @endif
                        @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
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

@include('modals.modalLogin')

@include('modals.modalError')



</body>
</html>