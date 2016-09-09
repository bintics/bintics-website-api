@extends('admin-console.layout.master-page')

@section('title', trans('admin.currencies.title'))

@section('content')
	<h2>{!! trans('admin.currencies.title') !!}</h2>
	{!! Form::open(['route' => ['admin.currencies.edit', $currency->id]]) !!}
		<label for="name">{!! trans('admin.currencies.field.name') !!}</label>
		{!! Form::text('name', $currency->name, ['class' => 'form-control', 'id' => 'name']) !!}
		
		{!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection