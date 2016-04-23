@extends('admin-console.layout.master-page')

@section('title', trans('admin.format_courses.title'))

@section('content')
	<h2>{!! trans('admin.format_courses.title') !!}</h2>
	<a href="{!! route('admin.format_courses.new') !!}">{!! trans('admin.format_courses.new') !!}</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>{!! trans('admin.format_courses.field.name') !!}</th>
				<th>{!! trans('admin.format_courses.field.created') !!}</th>
				<th>{!! trans('admin.format_courses.field.updated') !!}</th>
				<th>{!! trans('admin.format_courses.field.actions') !!}</th>
			</tr>
		</thead>
		<tbody>
			@foreach($formatCourses as $format)
				<tr>
					<td>{!! $format->name !!}</td>
					<td>{!! $format->created_at !!}</td>
					<td>{!! $format->updated_at !!}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection