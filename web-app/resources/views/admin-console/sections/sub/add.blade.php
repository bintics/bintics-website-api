@extends('admin-console.layout.master-page')

@section('title', trans('admin.sections.title'))

@section('content')
	<h2>{!! trans('admin.sections.sub.add_title', ['name' => $parent->name]) !!} </h2>
	{!! Form::open(['route' => ['admin.sections.sub.add_post', $parent->id]]) !!}
		<label for="name">{!! trans('admin.sections.sub.field.name') !!}</label>
		{!! Form::text('name', '', ['class' => 'form-control', 'id' => 'name']) !!}
		{!! Form::hidden('parent_id', $parent->id, ['class' => 'form-control', 'id' => 'name']) !!}
		{!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection