<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        {{ Html::style('assets/css/bootstrap.min.css')}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
	<style>
		.blue {
			background-color: #2196F3 !important;
		}
		
		.blue.darken-1 {
			background-color: #1E88E5 !important;
		}

		.blue-text.text-darken-1 {
			color: #1E88E5 !important;
		}

		.blue.darken-2 {
			background-color: #1976D2 !important;
		}

		.blue-text.text-darken-2 {
			color: #1976D2 !important;
		}

		.blue.darken-3 {
			background-color: #1565C0 !important;
		}

		.blue-text.text-darken-3 {
			color: #1565C0 !important;
		}

		.blue.darken-4 {
			background-color: #0D47A1 !important;
		}

		.blue-text.text-darken-4 {
			color: #0D47A1 !important;
		}
		
		.blue.accent-1 {
		  background-color: #82B1FF !important;
		}

		.blue-text.text-accent-1 {
		  color: #82B1FF !important;
		}

		.blue.accent-2 {
		  background-color: #448AFF !important;
		}

		.blue-text.text-accent-2 {
		  color: #448AFF !important;
		}

		.blue.accent-3 {
		  background-color: #2979FF !important;
		}

		.blue-text.text-accent-3 {
		  color: #2979FF !important;
		}

		.blue.accent-4 {
		  background-color: #2962FF !important;
		  color:white;
		}

		.blue-text.text-accent-4 {
		  color: #2962FF !important;
		}


	</style>
    <body>
		
		<?php $url = Request::segment(1); ?>
		
		<nav class="navbar navbar-default blue darken-4 navbar-fixed">
			<div class="container">
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
				<div class="col-md-3">
					<ul class="list-group">
						<li class="list-group-item blue darken-4" style="color:white"><i class="fa fa-gears"></i> Menu Utama</li>
						<a href="{{URL('adminkelas')}}"><li class="list-group-item  @if ($url == 'adminkelas') blue accent-4 @endif "><i class="fa fa-home"></i> Kelas</li></a>
						<a href="{{URL('adminsiswa')}}"><li class="list-group-item @if ($url == 'adminsiswa') blue accent-4 @endif "><i class="fa fa-user"></i> Siswa</li></a>
						<a href="{{URL('datasiswa')}}"><li class="list-group-item @if ($url == 'datasiswa') blue accent-4 @endif "><i class="fa fa-list"></i> Data Siswa</li></a>
					</ul>
				</div>
				<div class="col-md-9">
					@yield('content')
				</div>
			</div>
		</div>
		{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js')}}
		{{ Html::script('assets/js/bootstrap.min.js')}}
    </body>
</html>
