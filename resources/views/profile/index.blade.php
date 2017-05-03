@extends('profile.template.templatemiembrologueado')
@section('title','Perfil')
@section('content')
  Bienvenido {{Auth::user()->name}}
@endsection