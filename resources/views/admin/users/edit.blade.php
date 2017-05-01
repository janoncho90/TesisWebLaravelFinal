@extends('admin.template.adminmain')
@section('title','Editar Usuario')
@section('content')

<div class="row">
  <div class="col-md-4"></div>
	  <div class="col-md-4">


		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Editar usuario {{$user->nickname}}</h3>
			  </div>
			  
			  @include('flash::message')
			  <div class="panel-body">
			    {!! Form::open(['route'=>['users.update', $user], 'method'=>'PUT']) !!}

					<div class="formgroup">

						{!! Form::label('name','Nombre')!!}
						{!! Form::text('name',$user->name, ['class'=>'form-control','placeholder'=>'Nombre','required'])!!}

					</div>

					<div class="formgroup">
						{!! Form::label('lastname','Apellido')!!}
						{!! Form::text('lastname',$user->lastname, ['class'=>'form-control','placeholder'=>'Apellido','required'])!!}
					</div>

					<div class="formgroup">
						
						{!! Form::label('nickname','Nickname')!!}
						{!! Form::text('nickname',$user->nickname, ['class'=>'form-control','placeholder'=>'Nickname','required'])!!}
					</div>
					
					<div class="formgroup">
						{!! Form::label('email','Correo Electrónico')!!}
						{!! Form::email('email',$user->email, ['class'=>'form-control','placeholder'=>'example@gmail.com','required'])!!}
					</div>

					<div class="formgroup">
						
						{!! Form::label('rol_id','Tipo de Usuario')!!}
						{!! Form::select('rol_id',[''=>'Seleccione un Tipo', '1'=>'Administrador','2'=>'Miembro'],null, ['class'=>'form-control','required'])!!}
					</div>

					<br>

					<div class="formgroup">

						{!! Form::submit('Guardar', ['class'=>'btn btn-success'])!!}

					</div>

				{!! Form::close() !!}
			  </div>
		</div>









	  	
	  </div>
  <div class="col-md-4"></div>
</div>

@endsection