<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>@yield('title')</title>
	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
	{!! Html::style('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') !!}
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="/">Bintics</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
					@foreach($nav_top_items as $section)
					<li>
						<a href="#">
							{!! $section->name !!}
						</a>
					</li>
					@endforeach
					<li><a href="{!! route('client.courses.free') !!}">Cursos Gratuitos</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<h1 class="page-header">{!! trans('clients.title') !!}</h1>
		<div class="col-md-10">
			@yield('content')
		</div>
	</div>
	{!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}
	{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
	{!! Html::script('bower_components/moment/min/moment.min.js') !!}
	{!! Html::script('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}
	<script type="text/javascript">
		$(function () {
			$('.datepicker').datetimepicker({
				format: 'YYYY/MM/DD HH:mm:ss'
			});
		});
	</script>
</body>
</html>