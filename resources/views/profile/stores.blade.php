@extends('profile.template.templatemiembrologueado')
@section('title','Mis Tiendas')
@section('content')
  Bienvenido {{Auth::user()->name}}
  Estas son tus tiendas registradas
@endsection