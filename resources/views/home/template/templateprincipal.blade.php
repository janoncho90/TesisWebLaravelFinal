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

<header id="header"> 
<nav class="navbar navbar-inverse" role="banner">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="click comida" style="width: 170px;height: 45px;"></a>

</div>
<div class="collapse navbar-collapse navbar-right">
<ul class="nav navbar-nav">
 <li>
    <a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Inicio</a>
</li>
<li>
    <a href="{{route('registroGet')}}"><span class="glyphicon glyphicon-user"></span> Regístrate</a>
</li>
<li>
    <a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Ingresa</a>
</li>
</ul>
</div>
</div> 
</nav> 
</header>



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