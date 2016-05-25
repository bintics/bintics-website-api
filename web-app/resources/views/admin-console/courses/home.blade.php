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
					<th>{!! trans('admin.courses.field.start_date') !!}</th>
					<th>{!! trans('admin.courses.field.cost') !!}</th>
					<th>{!! trans('admin.courses.field.description') !!}</th>
					<th>{!! trans('admin.actions') !!}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($courses as $course)
					<tr>
						<td>{!! $course->name !!}</td>
						<td>{!! $course->start_date !!}</td>
						<td>{!! $course->cost !!}</td>
						<td>{!! $course->description !!}</td>
						<td>Algo</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $courses->links() !!}
	@else
		<div class="alert alert-info">{!! trans('admin.no_results') !!}</div>
	@endif
@endsection