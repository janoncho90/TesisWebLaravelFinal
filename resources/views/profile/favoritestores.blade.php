@extends('profile.template.templatemiembrologueado')
@section('title','Tiendas Favoritas')
@section('content')
  Bienvenido {{Auth::user()->name}}
  Estas son tus tiendas favoritas
@endsection