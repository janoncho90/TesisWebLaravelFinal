@extends('admin.template.main')
@section('title','Detalle de Usuario')
@section('content')



<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Dettalle de la Tienda {{$store->name}}</h2>
  </div>
  <div class="panel-body">
	  <div class="row">
		  <div class="col-md-6">
		  	<h4>Nombre : {{$store->name}}</h4>
    		<h4>Calle : {{$store->street}}</h4>
    		<h4>Numero : #{{$store->number}}</h4>
    		<h4>Promedio de Calificación :
             @if($store->calification_average==null)
             No ha sido Calificada
             @else
    		 {{$store->calification_average}}
    		 @endif
    		 </h4>
    	  </div>
		  <div class="col-md-6">
		  	<h4>Horarios de Atención de {{$store->start_day}} a {{$store->end_day}}</h4>
		  	@if($store->lunch_hour==null && $store->lunch_after_hour==null)
		  	<h4>Horario Continuado</h4>
		  	<h4>Hora de Apertura : {{$store->open_hour}}</h4>
		  	<h4>Hora de Cierre : {{$store->close_hour}}</h4>
		  	@else
		  	<h4>Mañana : De {{$store->open_hour}} a {{$store->lunch_hour}} hrs</h4>
		  	<h4>Tarde : De {{$store->lunch_after_hour}} a {{$store->close_hour}} hrs</h4>
		  	@endif
		  </div>
	  </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Datos del Propietario</h2>
  </div>
  <div class="panel-body">
	  <div class="row">
		  <div class="col-md-6">
		  	<h4>Nombre : {{$user->name}}</h4>
    		<h4>Nickname : {{$user->nickname}}</h4>
    		
    	  </div>
		  <div class="col-md-6">
		  	<h4>Apellido : {{$user->lastname}}</h4>
		  	<h4>Email : {{$user->email}}</h4>
		  </div>
	  </div>
  </div>
</div>

@endsection