@extends('admin-console.layout.master-page')

@section('title', trans('admin.format_courses.title'))

@section('content')
	<h2>{!! trans('admin.format_courses.title') !!}</h2>
	<a href="{!! route('admin.format_courses.new') !!}">{!! trans('admin.format_courses.new') !!}</a>
	@if($formatCourses->count() > 0)
		<table class="table table-hover">
			<thead>
				<tr>
					<th>{!! trans('admin.format_courses.field.name') !!}</th>
					<th>{!! trans('admin.format_courses.field.created') !!}</th>
					<th>{!! trans('admin.format_courses.field.updated') !!}</th>
					<th>{!! trans('admin.actions') !!}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($formatCourses as $format)
					<tr>
						<td>{!! $format->name !!}</td>
						<td>{!! $format->created_at !!}</td>
						<td>{!! $format->updated_at !!}</td>
						<td>
							<a href="{!! route('admin.format_courses.edit', ['id' => $format->id]) !!}" class="btn btn-primary btn-xs">
								{!! trans('admin.edit') !!}
							</a>
							{!! Form::open(['route' => ['admin.format_courses.delete', $format->id], 'style' => 'display: inline;']) !!}
								{!! Form::submit(trans('admin.delete'), ['class' => 'btn btn-danger btn-xs']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $formatCourses->links() !!}
	@else
		<div class="alert alert-info">{!! trans('admin.no_results') !!}</div>
	@endif
@endsection