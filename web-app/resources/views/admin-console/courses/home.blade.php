@extends('admin-console.layout.master-page')

@section('title', trans('admin.courses.title'))

@section('content')
	<h2>{!! trans('admin.courses.title') !!}</h2>
	<a href="{!! route('admin.courses.new') !!}">{!! trans('admin.courses.new') !!}</a>
	@if($courses->count() > 0)
		<table class="table table-hover">
			<thead>
				<tr>
					<th>{!! trans('admin.courses.field.name') !!}</th>
					<th>{!! trans('admin.courses.field.cost') !!}</th>
					<th>{!! trans('admin.courses.field.registered') !!}</th>
					<th>{!! trans('admin.courses.field.short_description') !!}</th>
					<th>{!! trans('admin.actions') !!}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($courses as $course)
					<tr>
						<td>
							<div class="col-sm-12 col-md-12">
								<div class="thumbnail">
									@if(is_null($course->url_logo))
										<img src="{!! asset('img/proximamente.gif') !!}" alt="Proximamente" height="250px" width="250px" />
									@else
										<img src="{!! $course->url_logo !!}" alt="{!! $course->name !!}" height="250px" width="250px" />
									@endif
									<div class="caption">
										<h4>{!! $course->name !!}</h4>
										<h5>
											{!! trans('clients.courses.fields.start_date') !!}
											<small>{!! $course->start_date !!}</small>
										</h5>
									</div>
								</div>
							</div>
						</td>
						<td>${!! $course->cost !!} {!! $course->currency->name !!}</td>
						<td>{!! $course->users->count() !!}</td>
						<td>{!! $course->short_description !!}</td>
						<td>
							<a href="{!! route('admin.courses.edit', ['id' => $course->id]) !!}">{!! trans('admin.edit') !!}</a>
							@if(!$course->released)
								{!! Form::open(['route' => ['admin.courses.enable', $course->id], 'style' => 'display: inline;']) !!}
								<input type="submit" class="btn-link" style="display: inline;" value="{!! trans('admin.enable') !!}" />
								{!! Form::close() !!}
							@else
								{!! Form::open(['route' => ['admin.courses.disable', $course->id], 'style' => 'display: inline;']) !!}
								<input type="submit" class="btn-link" style="display: inline;" value="{!! trans('admin.disable') !!}" />
								{!! Form::close() !!}
							@endif
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $courses->links() !!}
	@else
		<div class="alert alert-info">{!! trans('admin.no_results') !!}</div>
	@endif
@endsection