<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>@yield('title') | Panel De Administración</title>


 <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="{{asset('plugins/template/css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('plugins/template/css/sb-admin.css')}}">
    <!-- Morris Charts CSS -->
	<link rel="stylesheet" href="{{asset('plugins/template/css/morris.css')}}">
    <!-- Custom Fonts -->
	<link rel="stylesheet" href="{{asset('plugins/template/css/font-awesome.min.css')}}">

</head>
<body>
	
	<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('admin')}}"><img src="{{asset('images/logo.png')}}" alt="click comida" style="width: 110px;height: 25px;"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Fermin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{url('admin')}}"><span class="glyphicon glyphicon-home"></span> Inicio</a>
                    </li>
                    <li>
                        <a href="{{route('users.index')}}"><span class="glyphicon glyphicon-user"></span> Usuarios</a>
                    </li>
                    <li>
                        <a href="{{route('stores.index')}}"><span class="glyphicon glyphicon-shopping-cart"></span> Tiendas</a>
                    </li>
                    <li>
                        <a href="{{route('rols.index')}}"><span class="glyphicon glyphicon-lock"></span> Roles</a>
                    </li>
                    <li>
                        <a href="{{route('states.index')}}"><span class="glyphicon glyphicon-time"></span> Estados</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                @yield('content')
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

     <!-- jQuery -->
    <script src="{{asset('plugins/template/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('plugins/template/js/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('plugins/template/js/raphael.min.js')}}"></script>
    <script src="{{asset('plugins/template/js/morris.min.js')}}"></script>
    <script src="{{asset('plugins/template/js/morris-data.js')}}"></script>
</body>
</html>