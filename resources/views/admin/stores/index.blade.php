@extends('admin.template.main')
@section('title','Lista de Tiendas')
@section('content')


<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Listado de Tiendas Registradas</h3>
			  </div>

			

			  <div class="panel-body">
			    <div class="table-responsive">
			     
					  <table class="table table-striped">
					      <thead>
					      	<th>ID</th><th>Nombre</th><th>Calle</th><th>Numero</th><th>Calificacion global</th><th>Accion</th>
					      </thead>
					      <tbody>
					      	@foreach($stores as $store)
                               <tr>
                               	<td>{{$store->id}}</td>
                               	<td>{{$store->name}}</td>
                               	<td>{{$store->street}}</td>
                               	<td>{{$store->number}}</td>
                               	@if($store->calification_average==null)
                               	<td>
                               	0
								</td>
								@else
								<td>
									{{$store->calification_average}}
								</td>
                               	@endif
                               	
                               	
                               	<td><a href="" class="btn btn-success"></a></td>
                               </tr>
					      	@endforeach
					      </tbody>
					  </table>
				</div>
				{!! $stores->render()!!}
			  </div>
		</div>

@endsection