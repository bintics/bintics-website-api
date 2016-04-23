@extends('admin-console.layout.master-page')

@section('title', trans('admin.courses.title'))

@section('content')
	<h2>{!! trans('admin.courses.title') !!}</h2>
	<a href="{!! route('admin.courses.new') !!}">{!! trans('admin.courses.new') !!}</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>{!! trans('admin.courses.field.name') !!}</th>
				<th>{!! trans('admin.courses.field.start_date') !!}</th>
				<th>{!! trans('admin.courses.field.cost') !!}</th>
				<th>{!! trans('admin.courses.field.description') !!}</th>
				<th>{!! trans('admin.courses.field.actions') !!}</th>
			</tr>
		</thead>
		<tbody>

		</tbody>
	</table>
@endsection