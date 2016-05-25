@extends('admin-console.layout.master-page')

@section('title', trans('admin.courses.new'))

@section('content')
	<h2>{!! trans('admin.courses.new') !!}</h2>
	{!! Form::open(['route' => ['admin.courses.new']]) !!}
		<label for="format_course">Formato de curso</label>
		<select name="format_course" id="format_course" class="form-control">
			@foreach($formatCourses as $format)
			<option value="{!! $format->id !!}">{!! $format->name !!}</option>
			@endforeach
		</select>
		<label for="name">{!! trans('admin.courses.field.name') !!}</label>
		{!! Form::text('name', '', ['class' => 'form-control', 'id' => 'name']) !!}
		
		<label for="start_date">{!! trans('admin.courses.field.start_date') !!}</label>
		<div class='input-group datepicker date'>
			<input type='text' class="form-control" id="start_date" name="start_date" />
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-calendar"></span>
			</span>
		</div>

		<label for="cost">{!! trans('admin.courses.field.cost') !!}</label>
		{!! Form::text('cost', '', ['class' => 'form-control', 'id' => 'cost']) !!}

		<label for="description">{!! trans('admin.courses.field.description') !!}</label>
		{!! Form::textarea('description', '', ['class' => 'form-control', 'id' => 'description']) !!}
		
		{!! Form::submit(trans('admin.new'), ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection