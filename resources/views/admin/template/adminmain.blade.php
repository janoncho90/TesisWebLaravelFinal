<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title') | Panel de Administración</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{asset('plugins/template/css/bootstrap.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('plugins/template/css/custom.min.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" async="" src="{{asset('plugins/template/js/ga.js')}}"></script>
    <script>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
    <script id="_carbonads_projs" type="text/javascript" src="//srv.carbonads.net/ads/C6AILKT.json?segment=placement:bootswatchcom&amp;callback=_carbonads_go"></script>
  </head>
  <body>

  <!-- comienzo nav bar -->

<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{url('admin')}}"><img src="{{asset('images/logo.png')}}" alt="click comida" style="width: 110px;height: 25px;"></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
           
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

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Mi Cuenta  <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"> <span class="glyphicon glyphicon-file"></span> Mis Datos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-off"></span> Cerrar Sesión</a></li>
          </ul>

        </div>
      </div>
    </div>
<!-- fin nav bar -->    


<!--comienzo de contenido --> 
<div class="container">
    <section>
        
      @yield('content')
    </section>
</div>
<!-- fin de contenido --> 




<!-- scripts necesarios -->

    <script
  src="https://code.jquery.com/jquery-1.10.2.min.js"
  integrity="sha256-C6CB9UYIS9UJeqinPHWTHVqh/E1uhG5Twh+Y5qFQmYg="
  crossorigin="anonymous"></script>
    <script src="{{asset('plugins/template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/template/js/custom.js')}}"></script>


  <script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */
  </script>


  </body>
</html>
