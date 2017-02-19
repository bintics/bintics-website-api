@extends('admin-console.layout.master-page')

@section('title', trans('admin.pages.title'))

@section('content')
	<h2>{!! trans('admin.pages.title') !!}</h2>
	<a href="{!! route('admin.pages.new') !!}">{!! trans('admin.pages.new') !!}</a>
	@if($pages->count() > 0)
		<table class="table table-hover">
			<thead>
				<tr>
					<th>{!! trans('admin.pages.field.title') !!}</th>
					<th>{!! trans('admin.pages.field.menu') !!}</th>
					<th>{!! trans('admin.created_at') !!}</th>
					<th>{!! trans('admin.updated_at') !!}</th>
					<th>{!! trans('admin.actions') !!}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pages as $page)
					<tr>
						<td>{!! $page->title !!}</td>
						<td>{!! (is_null($page->menu) ? 'Ninguno' : $page->menu->name) !!}</td>
						<td>{!! $page->created_at !!}</td>
						<td>{!! $page->updated_at !!}</td>
						<td>
							<a href="{!! route('admin.pages.edit', ['id' => $page->id]) !!}" class="btn btn-primary btn-xs">
								{!! trans('admin.edit') !!}
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $pages->links() !!}
	@else
		<div class="alert alert-info">{!! trans('admin.no_results') !!}</div>
	@endif
@endsection