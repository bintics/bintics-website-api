@extends('admin-console.layout.master-page')

@section('title', trans('admin.menu.title'))

@section('content')
	<h2>{!! trans('admin.menu.title') !!}</h2>
	{!! Form::open(['route' => ['admin.menu.home']]) !!}
		<label for="name">{!! trans('admin.menu.field.name') !!}</label>
		{!! Form::text('name', '', ['class' => 'form-control', 'id' => 'name']) !!}
		{!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
	@if($menus->count() > 0)
		<table class="table table-hover">
			<thead>
				<tr>
					<th>{!! trans('admin.menu.field.name') !!}</th>
					<th>{!! trans('admin.menu.field.pages') !!}</th>
					<th>{!! trans('admin.created_at') !!}</th>
					<th>{!! trans('admin.updated_at') !!}</th>
					<th>{!! trans('admin.actions') !!}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($menus as $menu)
					<tr>
						<td>{!! $menu->name !!}</td>
						<td>{!! $menu->pages()->count() !!}</td>
						<td>{!! $menu->created_at !!}</td>
						<td>{!! $menu->updated_at !!}</td>
						<td>
							<a href="{!! route('admin.menu.edit', ['id' => $menu->id]) !!}" class="btn btn-primary btn-xs">
								{!! trans('admin.edit') !!}
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $menus->links() !!}
	@else
		<div class="alert alert-info">{!! trans('admin.no_results') !!}</div>
	@endif
@endsection