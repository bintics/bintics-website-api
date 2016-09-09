<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Bintics - @yield('title')</title>
	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
	{!! Html::style('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') !!}
</head>
<body>
	<div class="container-fluid">
		<h1 class="page-header">{!! trans('admin.title') !!}</h1>
		<div class="col-md-2">
			@section('sidebar')
				<ul class="nav nav-pills nav-stacked">
					<li class="dropdown-header">
						@if(Auth::check())
							Usuario: {!! Auth::user()->email !!}
						@endif
					</li>
					<li class="{!! (route('admin.home') == (URL::to('/') . '/' . Request::path()) ? 'active' : '')!!}">
						<a href="{!! route('admin.home') !!}">{!! trans('admin.home.title') !!}</a>
					</li>
					<li class="{!! (route('admin.users') == (URL::to('/') . '/' . Request::path()) ? 'active' : '')!!}">
						<a href="{!! route('admin.users') !!}">{!! trans('admin.users.title') !!}</a>
					</li>
					<li class="{!! (route('admin.courses') == (URL::to('/') . '/' . Request::path()) || Request::is('admin-console/courses*') ? 'active' : '')!!}">
						<a href="{!! route('admin.courses') !!}">{!! trans('admin.courses.title') !!}</a>
					</li>

					<li class="dropdown-header">{!! trans('admin.sections.title') !!}</li>
					<li class="{!! (route('admin.sections.home') == (URL::to('/') . '/' . Request::path()) || Request::is('admin-console/sections*') ? 'active' : '')!!}">
						<a href="{!! route('admin.sections.home') !!}">{!! trans('admin.sections.title') !!}</a>
					</li>

					<li class="dropdown-header">{!! trans('admin.catalogs') !!}</li>
					<li class="{!! (route('admin.format_courses.home') == (URL::to('/') . '/' . Request::path()) || Request::is('admin-console/format-courses*') ? 'active' : '')!!}">
						<a href="{!! route('admin.format_courses.home') !!}">{!! trans('admin.format_courses.title') !!}</a>
					</li>
					<li class="{!! (route('admin.currencies.home') == (URL::to('/') . '/' . Request::path()) || Request::is('admin-console/currencies*') ? 'active' : '')!!}">
						<a href="{!! route('admin.currencies.home') !!}">{!! trans('admin.currencies.title') !!}</a>
					</li>
					<li class="{!! (route('admin.logout') == (URL::to('/') . '/' . Request::path()) ? 'active' : '')!!}">
						<a href="{!! route('admin.logout') !!}">{!! trans('admin.logout') !!}</a>
					</li>
				</ul>
			@show
		</div>
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