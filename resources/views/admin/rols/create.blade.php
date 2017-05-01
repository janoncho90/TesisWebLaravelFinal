@extends('admin.template.adminmain')
@section('title','Crear Rol')
@section('content')
<br><br><br>
<div class="row">
  <div class="col-md-4"></div>
	  <div class="col-md-4">


		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Agregar Rol</h3>
			  </div>
			  @include('flash::message')
			  <div class="panel-body">
			    {!! Form::open(['route'=>'rols.store', 'method'=>'POST']) !!}

					<div class="formgroup">

						{!! Form::label('type','Nombre')!!}
						{!! Form::text('type',null, ['class'=>'form-control','placeholder'=>'Tipo de Usuario','required'])!!}

					</div>

					
					<br>

					<div class="formgroup">

						{!! Form::submit('Agregar', ['class'=>'btn btn-success'])!!}

					</div>

				{!! Form::close() !!}
			  </div>
		</div>









	  	
	  </div>
  <div class="col-md-4"></div>
</div>

@endsection