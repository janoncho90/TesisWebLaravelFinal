@extends('admin.template.adminmain')
@section('title','Editar Rol')
@section('content')
<br><br><br><br>
<div class="row">
  <div class="col-md-4"></div>
	  <div class="col-md-4">


		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Editar Rol {{$rol->type}}</h3>
			  </div>
			  
			  @include('flash::message')
			  <div class="panel-body">
			    {!! Form::open(['route'=>['rols.update', $rol], 'method'=>'PUT']) !!}

					

					<div class="formgroup">
						
						{!! Form::label('type','Nombre del Rol')!!}
						{!! Form::text('type',$rol->type, ['class'=>'form-control','placeholder'=>'Nombre del Rol','required'])!!}

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