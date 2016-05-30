<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>@yield('title')</title>
	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
	{!! Html::style('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') !!}
</head>
<body>
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