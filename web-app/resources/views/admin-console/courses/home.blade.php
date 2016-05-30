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
					<th>{!! trans('admin.courses.field.description') !!}</th>
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
						<td>{!! $course->cost !!}</td>
						<td>{!! $course->users->count() !!}</td>
						<td>{!! $course->description !!}</td>
						<td>
							<a href="{!! route('admin.courses.edit', ['id' => $course->id]) !!}">{!! trans('admin.edit') !!}</a>
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