@extends('profile.template.templatemiembrologueado')
@section('title','Mis Datos')
@section('content')
<div class="container">
<br><br>
	<div class="row">
	<div class="col-md-4">
		<ul class="nav nav-pills nav-stacked navbar-inverse">
		  <li role="presentation"><a href="{{route('mydataGet', Auth::user()->id)}}"><span class="glyphicon glyphicon-hdd"></span>  Mis Datos</a></li>
		  <li role="presentation"><a href="#"><span class="glyphicon glyphicon-globe"></span>  Mis Direcciones</a></li>
		  <li role="presentation"><a href="#"><span class="glyphicon glyphicon-phone"></span>  Mis Teléfonos</a></li>
    	</ul>
	</div>
  	<div class="col-md-8">
  		<h2>Datos de la Cuenta</h2>
        
      @include('flash::message')
  		
  			
  				<h2>Nombre</h2><h3>{{$user->name}}</h3>
  				<h2>Apellido</h2><h3>{{$user->lastname}}</h3>
                <h2>Nombre de Usuario</h2><h3>{{$user->nickname}}</h3>
  				<h2>Correo Electrónico</h2><h3>{{$user->email}}</h3>
  			    <button type="button" class="btn btn-link">Cambiar Correo</button>
  		
			<br><br>
  		<div class="row">
  			<div class="col-md-4"></div>
			<div class="col-md-4">
				<!--inicio modal-->
				<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Editar Mis Datos</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Realize sus cambios</h4>
      </div>
      <div class="modal-body">
      {!! Form::open(['route'=>['editarDatos', $user->id], 'method'=>'POST']) !!}

											<div class="formgroup">

												{!! Form::label('','Nombre')!!}
												{!! Form::text('name',$user->name, ['class'=>'form-control','placeholder'=>'Juan','required'])!!}

											</div>
											<br>
											<div class="formgroup">
												{!! Form::label('','Apellido')!!}
												{!! Form::text('lastname',$user->lastname, ['class'=>'form-control','placeholder'=>'Pérez','required'])!!}
											</div>
											<br>
											<div class="formgroup">
												
												{!! Form::label('','Nickname')!!}
												{!! Form::text('nickname',$user->nickname, ['class'=>'form-control','placeholder'=>'Juanito95','required'])!!}
											</div>
											<br>

		  
      </div>
      <div class="modal-footer">
                   <div class="formgroup">

						{!! Form::submit('Guardar', ['class'=>'btn btn-success'])!!}

					</div>
      </div>
      {!! Form::close() !!}
    </div>

  </div>
</div>
				<!--fin modal-->
			</div>
			<div class="col-md-4"></div>
  		</div>
  		
  	</div>
</div>
</div>
<br><br><br><br><br><br>
@endsection