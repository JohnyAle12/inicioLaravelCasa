<!DOCTYPE html>
<html>
<head>
	<title>Plantilla</title>
	{!!Html::style('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')!!}
	{!!Html::script('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')!!}
</head>
<body>
	<h3 class="text-success">CINEMA CINEMAX</h3>
	<div class="container">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  <a class="navbar-brand" href="/">Inicio</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				    <div class="navbar-nav">
				      <a class="nav-item nav-link active" href="/usuarios">Usuario <span class="sr-only">(current)</span></a>
				      <a class="nav-item nav-link" href="#">Movie</a>
				    </div>
				  </div>
				</nav>
				<div style="height: 30px"></div>
				@yield('contenido')
			</div>
		</div>
	</div>
	
	
</body>
</html>