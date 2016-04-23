@extends('admin-console.layout.master-page')

@section('title', trans('admin.courses.new'))

@section('content')
	<h2>{!! trans('admin.courses.new') !!}</h2>
	{!! Form::open(['route' => ['admin.courses.new']]) !!}
		<label for="name">{!! trans('admin.courses.field.name') !!}</label>
		{!! Form::text('name', '', ['class' => 'form-control', 'id' => 'name']) !!}
		
		<label for="start_date">{!! trans('admin.courses.field.start_date') !!}</label>
		{!! Form::text('start_date', '', ['class' => 'form-control', 'id' => 'start_date']) !!}

		<label for="cost">{!! trans('admin.courses.field.cost') !!}</label>
		{!! Form::text('cost', '', ['class' => 'form-control', 'id' => 'cost']) !!}

		<label for="description">{!! trans('admin.courses.field.description') !!}</label>
		{!! Form::text('description', '', ['class' => 'form-control', 'id' => 'description']) !!}
		
		{!! Form::submit('entrar', ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection