@extends('admin.template.main')
@section('title','Estados')
@section('content')


<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Listado de Estados de los Pedidos</h3>
			  </div>

			  <br>
				    		{!! Form::open(['route'=>'states.store', 'method'=>'POST']) !!}
							<div class="row">
				  				<div class="col-md-4"></div>
				 				<div class="col-md-4">{!! Form::text('description',null, ['class'=>'form-control','placeholder'=>'Escriba el nuevo estado','required'])!!}</div>
				  				<div class="col-md-4">{!! Form::submit('Agregar', ['class'=>'btn btn-success'])!!}</div>
							</div>
							{!! Form::close() !!}
				   
				
			
			  <div class="panel-body">
			    <div class="table-responsive">
			   
					  <table class="table table-striped table-bordered">
					      <thead>
					      	<th>ID</th><th>Descripción</th><th>Accion</th>
					      </thead>
					      <tbody>
					      	@foreach($states as $state)
                               <tr>
                               	<td>{{$state->id}}</td>
                               	<td>{{$state->description}}</td>
                               	<td><a href="" class="btn btn-success"></a></td>
                               </tr>
					      	@endforeach
					      </tbody>
					  </table>
				</div>
				
				<div class="row">
					  <div class="col-md-4"></div>
					  <div class="col-md-4">{!! $states->render()!!}</div>
					  <div class="col-md-4"></div>
				</div>
				
			  </div>
		</div>

@endsection