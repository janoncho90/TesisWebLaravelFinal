@extends('admin.template.main')
@section('title','Crear Estado')
@section('content')

<div class="row">
  <div class="col-md-4"></div>
	  <div class="col-md-4">


		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Agregar Estado</h3>
			  </div>
			  @include('flash::message')
			  <div class="panel-body">
			    {!! Form::open(['route'=>'states.store', 'method'=>'POST']) !!}

					<div class="formgroup">

						{!! Form::label('description','Descripción')!!}
						{!! Form::text('description',null, ['class'=>'form-control','placeholder'=>'Descripción del Estado','required'])!!}

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