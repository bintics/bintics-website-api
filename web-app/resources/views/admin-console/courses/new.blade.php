@extends('admin-console.layout.master-page')

@section('title', trans('admin.courses.new'))

@section('content')
	<h2>{!! trans('admin.courses.new') !!}</h2>
	{!! Form::open(['route' => ['admin.courses.new']]) !!}
		<label for="url_logo">{!! trans('admin.courses.field.url_logo') !!}</label>
			{!! Form::text('url_logo', '', ['class' => 'form-control', 'id' => 'url_logo']) !!}
		
		<label for="format_course">{!! trans('admin.format_courses.title') !!}</label>
		@if($formatCourses->count() == 0)
			<a href="{!! route('admin.format_courses.new') !!}">{!! trans('admin.format_courses.new') !!}</a>
		@endif
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

		
		<div class="row">
			<div class="col-md-10">
				<label for="cost">{!! trans('admin.courses.field.cost') !!}</label>
				{!! Form::text('cost', '', ['class' => 'form-control', 'id' => 'cost']) !!}
			</div>
			<div class="col-md-2">
				<label for="currency">{!! trans('admin.currencies.type') !!}</label>
				@if($currencies->count() == 0)
					<a href="{!! route('admin.currencies.new') !!}">{!! trans('admin.currencies.new') !!}</a>
				@endif
				<select name="currency" id="currency" class="form-control">
					@foreach($currencies as $currency)
						<option value="{!! $currency->id !!}">{!! $currency->name !!}</option>
					@endforeach
				</select>
			</div>
		</div>

		<label for="short_description">{!! trans('admin.courses.field.short_description') !!}</label>
		{!! Form::textarea('short_description', '', ['class' => 'form-control', 'id' => 'short_description']) !!}

		<label for="long_description">{!! trans('admin.courses.field.long_description') !!}</label>
		{!! Form::textarea('long_description', '', ['class' => 'form-control', 'id' => 'long_description']) !!}
		
		{!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection