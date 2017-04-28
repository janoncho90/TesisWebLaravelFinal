@extends('admin.template.main')
@section('title','Lista de Usuarios')
@section('content')


<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Listado de Usuarios Registrados</h3>
			  </div>

			

			  <div class="panel-body">
			    <div class="table-responsive">
			     <a href="{{route('users.create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Nuevo</a><hr>
					  <table class="table table-striped">
					      <thead>
					      	<th>ID</th><th>Nombre</th><th>Apellido</th><th>Nickname</th><th>Email</th><th>Rol</th><th>Accion</th>
					      </thead>
					      <tbody>
					      	@foreach($users as $user)
                               <tr>
                               	<td>{{$user->id}}</td>
                               	<td>{{$user->name}}</td>
                               	<td>{{$user->lastname}}</td>
                               	<td>{{$user->nickname}}</td>
                               	<td>{{$user->email}}</td>
                               	<td>@if($user->rol_id == 1)

                               	<span class="label label-danger">Admin</span>

                               	@elseif($user->rol_id ==2)

                               	<span class="label label-success">Miembro</span>

                               	@else

                               	<span class="label label-warning">Repartidor</span>

                               	@endif

                               	</td>
                               	<td><a href="" class="btn btn-success"></a></td>
                               </tr>
					      	@endforeach
					      </tbody>
					  </table>
				</div>
				{!! $users->render()!!}
			  </div>
		</div>

@endsection