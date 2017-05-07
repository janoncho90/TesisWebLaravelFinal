@extends('profile.template.templatemiembrologueado')
@section('title','Mis Teléfonos')
@section('content')
<div class="container">
<br><br>
	<div class="row">
	<div class="col-md-4">
		<ul class="nav nav-pills nav-stacked navbar-inverse">
		  <li role="presentation"><a href="{{route('mydataGet', Auth::user()->id)}}"><span class="glyphicon glyphicon-hdd"></span>  Mis Datos</a></li>
		  <li role="presentation"><a href="{{route('myaddressesGet', Auth::user()->id)}}"><span class="glyphicon glyphicon-globe"></span>  Mis Direcciones</a></li>
		  <li role="presentation"><a href="{{route('myphonesGet', Auth::user()->id)}}"><span class="glyphicon glyphicon-phone"></span>  Mis Teléfonos</a></li>
    	</ul>
	</div>
  	<div class="col-md-8">
  		<h2>Mis Teléfonos</h2>
			  @include('flash::message')
              <br>
			  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalTelefono">Agregar Teléfono</button>
              <br><br><br>
              @if($phones->count()!=0)
			  <table class="table table-hover table-responsive table-bordered">
			  <thead><td>Número</td><td>Editar</td><td>Eliminar</td></thead>
			  @foreach($phones as $phone)
			     <tr>
			     	<td>{{$phone->number}}</td>
			     	<td>
			     		<a href="#" class="btn btn-warning" "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
			     	</td>
			     	<td>
			     		 <a href="#" onclick="return confirm('¿Seguro que deseas Eliminar este Teléfono?')" class="btn btn-danger"
                               	    ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
			     	</td>
			     </tr>
			  @endforeach
             </table>
             @endif

			 <!-- Modal -->
			<div id="modalTelefono" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Ingrese el número de teléfono</h4>
			      </div>
			      <div class="modal-body">
			        				{!! Form::open(['route'=>['insertPhone',Auth::user()->id], 'method'=>'POST']) !!}

														<div class="formgroup">

															{!! Form::label('number','Número')!!}
															{!! Form::text('number',null, ['class'=>'form-control','placeholder'=>'999999999','required'])!!}

														</div>
														<br>									  
			      </div>
			      <div class="modal-footer">
			        							<div class="formgroup">

												{!! Form::submit('Agregar Teléfono', ['class'=>'btn btn-success'])!!}

												</div>

										{!! Form::close() !!} 
			      </div>
			    </div>

			  </div>
			</div>
		
   </div>
   </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
@endsection