@extends('admin-console.layout.master-page')

@section('title', trans('admin.menu.title'))

@section('content')
	<h2>{!! trans('admin.menu.edit') !!}</h2>
	{!! Form::open(['route' => ['admin.menu.edit', $menu->id]]) !!}
		<label for="name">{!! trans('admin.menu.field.name') !!}</label>
		{!! Form::text('name', $menu->name, ['class' => 'form-control', 'id' => 'name']) !!}
		{!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection