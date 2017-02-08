@extends('admin-console.layout.master-page')

@section('title', trans('admin.sections.title'))

@section('content')
Se agregará pagina a esta seccion
	<h2>{!! trans('admin.sections.page.title') !!} - {!! $parent->name !!}</h2>
	{!! Form::open(['route' => ['admin.sections.new']]) !!}
		<label for="title">{!! trans('admin.sections.page.field.title') !!}</label>
		{!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title']) !!}
		<label for="subtitle">{!! trans('admin.sections.page.field.subtitle') !!}</label>
		{!! Form::text('subtitle', '', ['class' => 'form-control', 'id' => 'subtitle']) !!}
		<label for="container">{!! trans('admin.sections.page.field.container') !!}</label>
		{!! Form::textarea('container', '', ['class' => 'form-control', 'id' => 'container', 'placeholder' => 'Escribe el contenido de la página']) !!}
		{!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection