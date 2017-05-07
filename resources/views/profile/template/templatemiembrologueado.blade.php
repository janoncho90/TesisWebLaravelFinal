<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title') | Click Comida</title>
	
	<!-- dependencias CSS -->
    <link href="{{asset('plugins/maintemplate/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/maintemplate/css/font-awesome.min.css')}}css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('plugins/maintemplate/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/maintemplate/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/maintemplate/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/maintemplate/css/responsive.css')}}" rel="stylesheet">
    <!--fin dependencias CSS-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body class="homepage">
<!--cabecera de pagina-->
<header id="header"> 
<!--comienzo menu-->
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <!--cabecera de menu-->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
                 <!--logo-->
                 <a class="navbar-brand" href="{{url('/profile/index')}}"><img src="{{asset('images/logo.png')}}" alt="click comida" style="width: 110px;height: 25px;">
                 </a>
                <!--fin logo-->
            </div>
            <!--fin cabecera de menu-->

            <!--parte principal del menu-->
             <div class="navbar-collapse collapse" id="navbar-main">
                  <ul class="nav navbar-nav">
                        <li>
                                <a href="{{URL('/profile/index')}}"><span class="glyphicon glyphicon-home"></span> Inicio</a>
                        </li>
                        <li>
                                <a href=""><span class="glyphicon glyphicon-shopping-cart"></span> Mis Tiendas</a>
                        </li>
                        <li>
                                <a href=""><span class="glyphicon glyphicon-earphone"></span> Mis Pedidos</a>
                        </li>

                             

                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-star"></span> Favoritos <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>  Tiendas</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-cutlery"></span>  Productos</a></li>
                          </ul>
                        </li>
                 </ul>
                <!--parte derecha del menu-->
                  <ul class="nav navbar-nav navbar-right">

                      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                        <!--inicio dropdown del menu-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-hand-right"></span>   {{ Auth::user()->email }}  <span class="caret"></span></a>

                     
                              <ul class="dropdown-menu">
                                <li><a href="{{route('mydataGet', Auth::user()->id)}}"> <span class="glyphicon glyphicon-user"></span> Mi Perfil</a></li>

                                <li>
                                                            <a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                                 <span class="glyphicon glyphicon-off"></span>        
                                                                Cerrar Sessión
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                {{ csrf_field() }}
                                                            </form>
                               </li>
                             </ul>
                      </li>
                      <!--fin dropdown del menu-->

        </div>
        <!--fin parte principal del menu-->
        </div> 
    </nav>
<!--fin del menu--> 
</header>
<!-- fin cabecera de pagina-->

    @yield('content')


<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    © 2017 <a target="_blank" href="http://aunclick.esy.es/" title="Comida a un Click de distancia">ClickComida</a>. Todos Los Derechos Reservados
                </div>
            </div>
        </div>
    </footer>






   <!--scripts necesarios--> 
    <script src="{{asset('plugins/maintemplate/js/jquery.js')}}"></script>
    <script src="{{asset('plugins/maintemplate/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/maintemplate/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('plugins/maintemplate/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('plugins/maintemplate/js/main.js')}}"></script>
    <script src="{{asset('plugins/maintemplate/js/wow.min.js')}}"></script>
    <!--fin scripts necesarios-->

</body>
</html>