@extends('admin-console.layout.master-page')

@section('title', trans('admin.sections.title'))

@section('content')
	<h2>{!! trans('admin.sections.title') !!}</h2>
	{!! Form::open(['route' => ['admin.sections.new']]) !!}
		<label for="name">{!! trans('admin.sections.field.name') !!}</label>
		{!! Form::text('name', '', ['class' => 'form-control', 'id' => 'name']) !!}
		{!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection