@extends('profile.template.templatemiembrologueado')
@section('title','Pedidos Relizados')
@section('content')
  Bienvenido {{Auth::user()->name}}
  Estos son todos tus pedidos realizados
@endsection