@extends('admin.template.adminmain')
@section('title','Crear Usuario')
@section('content')
<br><br><br><br>
<div class="row">
  <div class="col-md-4"></div>
	  <div class="col-md-4">


		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Agregar un Nuevo Usuario</h3>
			  </div>
			  <div class="panel-body">
			    {!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}

					<div class="formgroup">

						{!! Form::label('name','Nombre')!!}
						{!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Nombre','required'])!!}

					</div>

					<div class="formgroup">
						{!! Form::label('lastname','Apellido')!!}
						{!! Form::text('lastname',null, ['class'=>'form-control','placeholder'=>'Apellido','required'])!!}
					</div>

					<div class="formgroup">
						
						{!! Form::label('nickname','Nickname')!!}
						{!! Form::text('nickname',null, ['class'=>'form-control','placeholder'=>'Nickname','required'])!!}
					</div>
					<div class="formgroup">
						{!! Form::label('email','Correo Electrónico')!!}
						{!! Form::email('email',null, ['class'=>'form-control','placeholder'=>'example@gmail.com','required'])!!}
					</div>
					<div class="formgroup">
						
						{!! Form::label('password','Contraseña')!!}
						{!! Form::password('password', ['class'=>'form-control','placeholder'=>'********','required'])!!}
					</div>

					<div class="formgroup">
						
						{!! Form::label('rol_id','Tipo de Usuario')!!}
						{!! Form::select('rol_id',[''=>'Seleccione un Tipo', '1'=>'Administrador','2'=>'Miembro'],null, ['class'=>'form-control','required'])!!}
					</div>

					<br>

					<div class="formgroup">

						{!! Form::submit('Registrar', ['class'=>'btn btn-success'])!!}

					</div>

				{!! Form::close() !!}
			  </div>
		</div>









	  	
	  </div>
  <div class="col-md-4"></div>
</div>

<br><br><br>

@endsection