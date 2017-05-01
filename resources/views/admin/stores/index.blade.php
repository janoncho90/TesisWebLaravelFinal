@extends('admin.template.adminmain')
@section('title','Lista de Tiendas')
@section('content')

<br><br><br>
<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Listado de Tiendas Registradas</h3>
			  </div>

			

			  <div class="panel-body">
			    <div class="table-responsive">
			     
					  <table class="table table-striped table-bordered">
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
                               	
                               	
                               	<td><a href="{{route('stores.show',$store->id)}}" class="btn btn-warning">Detalle</a></td>
                               </tr>
					      	@endforeach
					      </tbody>
					  </table>
				</div>
				
				<div class="row">
					  <div class="col-md-4"></div>
					  <div class="col-md-4">{!! $stores->render()!!}</div>
					  <div class="col-md-4"></div>
				</div>
				
			  </div>
		</div>

@endsection