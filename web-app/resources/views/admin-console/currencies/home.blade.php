@extends('admin-console.layout.master-page')

@section('title', trans('admin.currencies.title'))

@section('content')
	<h2>{!! trans('admin.currencies.title') !!}</h2>
	<a href="{!! route('admin.currencies.new') !!}">{!! trans('admin.currencies.new') !!}</a>
	@if($currencies->count() > 0)
		<table class="table table-hover">
			<thead>
				<tr>
					<th>{!! trans('admin.currencies.field.name') !!}</th>
					<th>{!! trans('admin.actions') !!}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($currencies as $currency)
					<tr>
						<td>{!! $currency->name !!}</td>
						<td>{!! $currency->created_at !!}</td>
						<td>{!! $currency->updated_at !!}</td>
						<td>
							<a href="{!! route('admin.currencies.edit', ['id' => $currency->id]) !!}" class="btn btn-primary btn-xs">
								{!! trans('admin.edit') !!}
							</a>
							{!! Form::open(['route' => ['admin.currencies.delete', $currency->id], 'style' => 'display: inline;']) !!}
								{!! Form::submit(trans('admin.delete'), ['class' => 'btn btn-danger btn-xs']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $currencies->links() !!}
	@else
		<div class="alert alert-info">{!! trans('admin.no_results') !!}</div>
	@endif
@endsection