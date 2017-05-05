@extends('admin.template.adminmain')
@section('title','Lista de Roles')
@section('content')

<br><br><br>
<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Listado de Roles de los Usuarios</h3>
			  </div>
 					<br>
				    		{!! Form::open(['route'=>'rols.store', 'method'=>'POST']) !!}
							<div class="row">
				  				<div class="col-md-4"></div>
				 				<div class="col-md-4">{!! Form::text('type',null, ['class'=>'form-control','placeholder'=>'Escriba el nuevo rol','required'])!!}</div>
				  				<div class="col-md-4">{!! Form::submit('Agregar', ['class'=>'btn btn-success'])!!}</div>
							</div>
							{!! Form::close() !!}
			

			  <div class="panel-body">
			    <div class="table-responsive">
			     @include('flash::message')
					  <table class="table table-striped table-bordered">
					      <thead>
					      	<th>ID</th><th>Tipo de Usuario</th><th>Accion</th>
					      </thead>
					      <tbody>
					      	@foreach($rols as $rol)
                               <tr>
                               	<td>{{$rol->id}}</td>
                               	<td>{{$rol->type}}</td>
                              	<td><a href="{{route('rols.edit',$rol->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                               </tr>
					      	@endforeach
					      </tbody>
					  </table>
				</div>
				<div class="row">
					  <div class="col-md-4"></div>
					  <div class="col-md-4">{!! $rols->render()!!}</div>
					  <div class="col-md-4"></div>
				</div>
				
			  </div>
		</div>

@endsection