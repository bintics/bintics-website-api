@extends('admin-console.layout.master-page')

@section('title', trans('admin.pages.title'))

@section('content')
	<h2>{!! trans('admin.pages.new') !!}</h2>
	{!! Form::open(['route' => ['admin.pages.new']]) !!}
		<div class="checkbox">
			<label>
				{!! Form::checkbox('public', 1, false, ['id' => 'public']) !!}
				{!! trans('admin.pages.field.public') !!}
			</label>
		</div>

		<div class="checkbox">
			<label>
				{!! Form::checkbox('url', 1, false, ['id' => 'url']) !!}
				{!! trans('admin.pages.field.asurl') !!}
			</label>
		</div>
		<label for="url">{!! trans('admin.pages.field.url') !!}</label>
		{!! Form::text('url', '', ['class' => 'form-control', 'id' => 'url']) !!}
		
		<label for="menu">{!! trans('admin.pages.field.menu') !!}</label>
		<select id="menu" name="menu_id" class="form-control">
			<option value="0">[Ninguno]</option>
			@foreach($menus as $menu)
			<option value="{!! $menu->id !!}">{!! $menu->name !!}</option>
			@endforeach
		</select>

		<label for="title">{!! trans('admin.pages.field.title') !!}</label>
		{!! Form::text('title', '', ['class' => 'form-control', 'id' => 'title']) !!}

		<label for="subtitle">{!! trans('admin.pages.field.subtitle') !!}</label>
		{!! Form::text('subtitle', '', ['class' => 'form-control', 'id' => 'subtitle']) !!}

		<label for="content">{!! trans('admin.pages.field.content') !!}</label>
		{!! Form::textarea('content', '', ['class' => 'form-control', 'id' => 'content']) !!}
		{!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection