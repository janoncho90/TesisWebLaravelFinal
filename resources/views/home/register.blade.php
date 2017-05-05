@extends('home.template.templateprincipal')
@section('title','Registro de Usuario')
@section('content')

<div class="row">
  <div class="col-md-4"></div>
	  <div class="col-md-4">


		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Ingresa tus Datos</h3>
			  </div>
			  @include('flash::message')
			  <div class="panel-body">

			    {!! Form::open(['route'=>'registroPost', 'method'=>'POST']) !!}

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


@endsection