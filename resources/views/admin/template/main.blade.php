<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Panel De Administración</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/mycss/footer.css')}}">
</head>
<body>
		@include('admin.template.partials.nav')
	<div class="container">
		<section>
		    
			@yield('content')
		</section>
	
		

	</div>

<footer class="footer">
     <label style="color: #ffffff;">2017 - Todos Los Derechos Reservados ®</label>
</footer>
	
    <script src="{{asset('plugins/jquery/jquery-3.2.1.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('plugins/myjs/footer.js')}}"></script>
</body>
</html>