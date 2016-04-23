@extends('admin-console.layout.master-page')

@section('title', trans('admin.format_courses.title'))

@section('content')
	<h2>{!! trans('admin.format_courses.title') !!}</h2>
	{!! Form::open(['route' => ['admin.format_courses.new']]) !!}
		<label for="name">{!! trans('admin.format_courses.field.name') !!}</label>
		{!! Form::text('name', '', ['class' => 'form-control', 'id' => 'name']) !!}
		
		{!! Form::submit('entrar', ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection