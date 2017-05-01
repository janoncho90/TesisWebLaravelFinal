@extends('admin.template.adminmain')
@section('title','Detalle de Usuario')
@section('content')

<br><br><br><br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Datos del Usuario {{$user->nickname}}</h2>
  </div>
  <div class="panel-body">
  	<h4>Nickname : {{$user->nickname}}</h4>
    <h4>Nombre : {{$user->name}}</h4>
    <h4>Apellido : {{$user->lastname}}</h4>
    <h4>Email : {{$user->email}}</h4>
    <h4>Tipo de Usuario : 
    @if($user->rol_id==1)
    
    	Admin
    
    @elseif($user->rol_id==2)
    
    Miembro
    @else
    
    Repartidor
    @endif
    
    </h4>
  </div>
</div>


@if($stores==null)

@else

<div class="panel panel-default">

			  <div class="panel-heading">
			    <h2 class="panel-title">Tiendas Creadas</h2>
			  </div>

			

			  <div class="panel-body">
			    <div class="table-responsive">
			     @include('flash::message')
					  <table class="table table-striped table-bordered">
					      <thead>
					      	<th>ID</th><th>Nombre</th><th>calle</th><th>numero</th>
					      </thead>
					      <tbody>
					      	@foreach($stores as $store)

                               <tr>
                               	<td>{{$store->id}}</td>
                               	<td>{{$store->name}}</td>
                               	<td>{{$store->street}}</td>
                               	<td>{{$store->number}}</td>
                               </tr>
					      	@endforeach
					      </tbody>
					  </table>
				</div>

				<div class="row">
					  <div class="col-md-4"></div>
					  <div class="col-md-4"></div>
					  <div class="col-md-4"></div>
				</div>
				
			  </div>
		</div>
@endif
@endsection