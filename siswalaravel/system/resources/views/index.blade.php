<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        {{ Html::style('assets/css/bootstrap.min.css')}}
    </head>
	<style>
		.blue {
			background-color: #2196F3 !important;
		}
	</style>
    <body>
		
		<nav class="navbar navbar-default blue navbar-fixed">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#" style="color:white">Belajar Laravel</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul class="list-group">
						<li class="list-group-item">Cras justo odio</li>
						<li class="list-group-item">Dapibus ac facilisis in</li>
						<li class="list-group-item">Morbi leo risus</li>
						<li class="list-group-item">Porta ac consectetur ac</li>
						<li class="list-group-item">Vestibulum at eros</li>
					</ul>
				</div>
				<div class="col-md-8">
					@yield('content')
				</div>
			</div>
		</div>
		{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js')}}
		{{ Html::script('assets/js/bootstrap.min.js')}}
    </body>
</html>
