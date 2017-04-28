 <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href=""><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li><a href="{{route('users.index')}}"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
        
        <li><a href="{{route('stores.index')}}"><span class="glyphicon glyphicon-shopping-cart"></span> Tiendas</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Roles</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-time"></span> Estados</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Mi Cuenta  <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"> <span class="glyphicon glyphicon-file"></span> Mis Datos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><span class="glyphicon glyphicon-off"></span> Cerrar Sesión</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>