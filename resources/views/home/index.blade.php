@extends('home.template.templateprincipal')
@section('title','Home')
@section('content')

<div class="jumbotron">
  <h1>Bienvenido a Click Comida</h1>
  <p>Aquí puedes encontrar locales de comida con servicio de reparto a domicilio. Tú decides
  que es lo que quieres comer desde la comodidad de tu hogar. Regístrate para comenzar ahora.</p>
  <p><a href="{{route('registroGet')}}" class="btn btn-primary btn-lg" href="#" role="button">Regístrate</a></p>
</div>




    <section id="services" class="service-item">
       <div class="container">
            <div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <h2>Pide Comida en 3 simples pasos</h2>
                <p class="lead">No esperes más y haz tu pedido sin moverte de tu casa<br> Comienza ahora.</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('images/services/registrar.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Regístrate</h3>
                            <p>Puedes hacerlo con una cuenta de correo o con Facebook.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('images/services/tienda.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Busca Tu Local</h3>
                            <p>Encuentra el local que buscas dentro del rango donde te ubicas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{asset('images/services/click.png')}}">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Haz Tu Pedido</h3>
                            <p>Con tan solo un click podras realizar tu pedido desde la comodidad de tu hogar.</p>
                        </div>
                    </div>
                </div> 

                                                               
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
@endsection