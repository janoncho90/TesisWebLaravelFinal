<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Panel De Administración</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

</head>
<body>
		@include('admin.template.partials.nav')
	<div class="container">
		<section>
			@yield('content')
		</section>
	
		
<div class="well well-lg" style="background-color: #222222;"><label style="color: #ffffff;">Todos Los Derechos Reservados ®</label></div>
	</div>
    <script src="{{asset('plugins/jquery/jquery-3.2.1.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>