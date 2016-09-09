@extends('admin-console.layout.master-page')

@section('title', trans('admin.courses.edit'))

@section('content')
	<h2>{!! trans('admin.courses.edit') !!}</h2>

	{!! Form::open(['route' => ['admin.courses.edit', $course->id]]) !!}
		<div class="col-md-3">
			<h3>
				{!! trans('admin.preview') !!}
			</h3>
			@if(is_null($course->url_logo))
				<img src="{!! asset('img/proximamente.gif') !!}" alt="Proximamente" height="250px" width="250px" />
			@else
				<img src="{!! $course->url_logo !!}" alt="{!! $course->name !!}" height="250px" width="250px" />
			@endif
		</div>
		<div class="col-md-6">
			
			<label for="url_logo">{!! trans('admin.courses.field.url_logo') !!}</label>
			{!! Form::text('url_logo', $course->url_logo, ['class' => 'form-control', 'id' => 'url_logo']) !!}

			<label for="format_course">{!! trans('admin.format_courses.title') !!}</label>
			<select name="format_course" id="format_course" class="form-control">
				@foreach($formatCourses as $format)
					<option value="{!! $format->id !!}" {!! $course->format_course_id == $format->id ? ("selected='selected'") : '' !!} >{!! $format->name !!}</option>
				@endforeach
			</select>
			<label for="name">{!! trans('admin.courses.field.name') !!}</label>
			{!! Form::text('name', $course->name, ['class' => 'form-control', 'id' => 'name']) !!}
			
			<label for="start_date">{!! trans('admin.courses.field.start_date') !!}</label>
			<div class='input-group datepicker date'>
				<input type='text' class="form-control" id="start_date" name="start_date" value="{!! $course->start_date !!}" />
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>

			<div class="row">
				<div class="col-md-8">
					<label for="cost">{!! trans('admin.courses.field.cost') !!}</label>
					{!! Form::text('cost', $course->cost, ['class' => 'form-control', 'id' => 'cost']) !!}
				</div>
				<div class="col-md-4">
					<label for="currency">{!! trans('admin.currencies.type') !!}</label>
					@if($currencies->count() == 0)
						<a href="{!! route('admin.currencies.new') !!}">{!! trans('admin.currencies.new') !!}</a>
					@endif
					<select name="currency" id="currency" class="form-control">
						@foreach($currencies as $currency)
							<option value="{!! $currency->id !!}" {!! $course->type_currency_id == $currency->id ? ("selected='selected'") : '' !!} >{!! $currency->name !!}</option>
						@endforeach
					</select>
				</div>
			</div>

			<label for="description">{!! trans('admin.courses.field.description') !!}</label>
			{!! Form::textarea('description', $course->description, ['class' => 'form-control', 'id' => 'description']) !!}
			
			{!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary btn-block']) !!}

		</div>
	{!! Form::close() !!}
@endsection