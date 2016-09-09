@extends('admin-console.layout.master-page')

@section('title', trans('admin.sections.title'))

@section('content')
	<h2>{!! trans('admin.sections.title') !!}</h2>
	<a href="{!! route('admin.sections.new') !!}">{!! trans('admin.sections.new') !!}</a>
	@if($sections->count() > 0)
		<table class="table table-hover">
			<thead>
				<tr>
					<th>{!! trans('admin.sections.field.name') !!}</th>
					<th>{!! trans('admin.actions') !!}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($sections as $section)
					<tr>
						<td>{!! $section->name !!}</td>
						<td>{!! $section->created_at !!}</td>
						<td>{!! $section->updated_at !!}</td>
						<td>
							<a href="{!! route('admin.sections.edit', ['id' => $section->id]) !!}" class="btn btn-primary btn-xs">
								{!! trans('admin.edit') !!}
							</a>
							{!! Form::open(['route' => ['admin.sections.delete', $section->id], 'style' => 'display: inline;']) !!}
								{!! Form::submit(trans('admin.delete'), ['class' => 'btn btn-danger btn-xs']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $sections->links() !!}
	@else
		<div class="alert alert-info">{!! trans('admin.no_results') !!}</div>
	@endif
@endsection