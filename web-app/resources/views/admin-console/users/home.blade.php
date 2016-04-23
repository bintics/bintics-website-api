@extends('admin-console.layout.master-page')

@section('title', trans('admin.users.title'))

@section('content')
	<h2>{!! trans('admin.users.title') !!}</h2>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>{!! trans('admin.users.field.email') !!}</th>
				<th>{!! trans('admin.users.field.created') !!}</th>
				<th>{!! trans('admin.users.field.updated') !!}</th>
				<th>{!! trans('admin.users.field.actions') !!}</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $us)
			<tr>
				<td>{{{ $us->email }}}</td>
				<td>{{{ $us->created_at }}}</td>
				<td>{{{ $us->updated_at }}}</td>
				<td>Algo</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection