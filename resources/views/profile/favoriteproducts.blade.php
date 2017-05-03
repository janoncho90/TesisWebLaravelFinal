@extends('profile.template.templatemiembrologueado')
@section('title','Productos Favoritos')
@section('content')
  Bienvenido {{Auth::user()->name}}
  Estas son tus productos favoritos
@endsection