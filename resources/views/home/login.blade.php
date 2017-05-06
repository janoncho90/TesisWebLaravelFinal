@extends('home.template.templateprincipal')

@section('content')



<section id="services" class="service-item">
       <div class="container">
            <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <p class="lead">Ingrese su Correo Electrónico y su clave.</p>
            </div>

            <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3></h3></div>
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-1"></div>
                  <div class="col-md-1"></div>
                  <div class="col-md-6"> @include('flash::message')</div>
                  
                </div>
               
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="example@gmail.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="********">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            </div>

        </div>
</section>












@endsection
