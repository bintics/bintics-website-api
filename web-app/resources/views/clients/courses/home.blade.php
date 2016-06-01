@extends('clients.layout.master-page')

@section('title', trans('clients.courses.title'))

@section('content')
	<h2>{!! trans('clients.courses.available') !!}</h2>
	<div class="row">
		<div class="col-md-12">
			@if($courses->count() > 0)
				@foreach($courses as $course)
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						@if(is_null($course->url_logo))
							<img src="{!! asset('img/proximamente.gif') !!}" alt="Proximamente" height="250px" width="250px" />
						@else
							<img src="{!! $course->url_logo !!}" alt="{!! $course->name !!}" height="250px" width="250px" />
						@endif
						<div class="caption">
							<h3>{!! $course->name !!}</h3>
							<h5>
								{!! trans('clients.courses.fields.start_date') !!}
								<small>{!! $course->start_date !!}</small>
							</h5>
							<p>{!! $course->description !!}</p>
							<p class="text-center">
								<a href="#" class="btn btn-primary" role="button">{!! trans('clients.courses.sign_up') !!}</a>
								<a href="#" class="btn btn-default" role="button">{!! trans('clients.details') !!}</a>
							</p>
						</div>
					</div>
				</div>
				@endforeach
			@else
				<div class="alert alert-info">
					{!! trans('clients.courses.no_abailable') !!}
				</div>
			@endif
		</div>
	</div>
@endsection