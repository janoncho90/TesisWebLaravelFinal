@extends('home.template.templateprincipal')
@section('title','Registro de Usuario')
@section('content')

<section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                <h2>Regístrate con tu Email o ingresa con Facebook</h2>
            </div>
			<!--Comienzo de Fila-->
            <div class="row">

             
              <!--Lado Izquierdo-->
				<div class="col-md-6">
						 <div class="media services-wrap wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
							 @include('flash::message')

									    {!! Form::open(['route'=>'registroPost', 'method'=>'POST']) !!}

											<div class="formgroup">

												
												{!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Nombre','required'])!!}

											</div>
											<br>
											<div class="formgroup">
												
												{!! Form::text('lastname',null, ['class'=>'form-control','placeholder'=>'Apellido','required'])!!}
											</div>
											<br>
											<div class="formgroup">
												
												
												{!! Form::text('nickname',null, ['class'=>'form-control','placeholder'=>'Nickname','required'])!!}
											</div>
											<br>
											<div class="formgroup">
												
												{!! Form::email('email',null, ['class'=>'form-control','placeholder'=>'Email : example@gmail.com','required'])!!}
											</div>
											<br>
											<div class="formgroup">
												
												
												{!! Form::password('password', ['class'=>'form-control','placeholder'=>'Password: ********','required'])!!}
											</div>

											<br>

											<div class="formgroup">

												{!! Form::submit('Registrar', ['class'=>'btn btn-success'])!!}

											</div>

										{!! Form::close() !!}   
						</div>
				              	
			  </div>
			  <!--fin Lado Izquierdo-->
			  <!--Lado Derecho-->
			  <div class="col-md-6">

							<div class="media services-wrap wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">

										    {!! Form::open(['route'=>'facebook', 'method'=>'GET']) !!}

											<div class="col-md-4"></div>
											<div class="col-md-4">
											<div class="formgroup">

											{!! Form::label('','Inicia Sesión')!!}						<br>							
											{!! Form::submit('Ingresa con Facebook', ['class'=>'btn btn-primary'])!!}

											</div>
											</div>
											<div class="col-md-4"></div>
												

											{!! Form::close() !!}   
							</div>
			  </div>
			  <!--fin lado derecho-->
             

			                                              
            </div><!--/.row-->
        </div><!--/.container-->
 </section>


@endsection