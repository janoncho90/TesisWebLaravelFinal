@extends('admin.template.adminmain')
@section('title','Editar Usuario')
@section('content')
<br><br><br><br>
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
						
						{!! Form::label('rol_id','Tipo de Usuario   ')!!}
						{!!Form::select('rol_id',$rols, $user->rol_id,['class'=>'form-control','required']) !!}
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