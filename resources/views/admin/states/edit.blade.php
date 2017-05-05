@extends('admin.template.adminmain')
@section('title','Editar Estado')
@section('content')
<br><br><br><br>
<div class="row">
  <div class="col-md-4"></div>
	  <div class="col-md-4">


		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Editar Estado {{$state->description}}</h3>
			  </div>
			  
			  @include('flash::message')
			  <div class="panel-body">
			    {!! Form::open(['route'=>['states.update', $state], 'method'=>'PUT']) !!}

					

					<div class="formgroup">
						
						{!! Form::label('description','Descripción')!!}
						{!! Form::text('description',$state->description, ['class'=>'form-control','placeholder'=>'Descripcion del Estado','required'])!!}

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