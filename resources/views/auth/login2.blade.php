@extends('main.template.maintemplate')

@section('content')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio de Sesión</div>
                <div class="panel-body">

                   @include('flash::message')
{!! Form::open(['route'=>'login', 'method'=>'POST']) !!}

                   {{ csrf_field() }}
                    <div class="formgroup">
                        {!! Form::label('email','Correo Electrónico')!!}
                        {!! Form::email('email',null, ['class'=>'form-control','placeholder'=>'example@gmail.com','required'])!!}
                    </div>

                    <div class="formgroup">
                        
                        {!! Form::label('password','Contraseña')!!}
                        {!! Form::password('password', ['class'=>'form-control','placeholder'=>'********','required'])!!}
                    </div>

                    

                    <br>

                    <div class="formgroup">

                        {!! Form::submit('Ingresar', ['class'=>'btn btn-success'])!!}

                    </div>

{!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
