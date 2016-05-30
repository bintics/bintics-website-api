@extends('clients.layout.master-page')

@section('title', trans('clients.courses.title'))

@section('content')
	<h2>{!! trans('clients.courses.available') !!}</h2>
	<div class="row">
		@foreach($courses as $course)
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="..." alt="..." />
				<div class="caption">
					<h3>{!! $course->name !!}</h3>
					<p>{!! $course->description !!}</p>
					<p>
						<a href="#" class="btn btn-primary" role="button">{!! trans('clients.courses.sign_up') !!}</a>
						<a href="#" class="btn btn-default" role="button">{!! trans('clients.details') !!}</a>
					</p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endsection