@extends('admin-console.layout.master-page')

@section('title', trans('admin.pages.title'))

@section('content')
	<h2>{!! trans('admin.pages.edit') !!}</h2>
	{!! Form::open(['route' => ['admin.pages.edit', $page->id]]) !!}
		<div class="checkbox">
			<label>
				{!! Form::checkbox('public', 1, $page->public, ['id' => 'public']) !!}
				{!! trans('admin.pages.field.public') !!}
			</label>
		</div>

		<label for="menu">{!! trans('admin.pages.field.menu') !!}</label>
		<select id="menu" name="menu_id" class="form-control">
			<option value="0">[Ninguno]</option>
			@foreach($menus as $menu)
			<option value="{!! $menu->id !!}" {!! ($menu->id == $page->menu_id ? 'selected' : '') !!}>{!! $menu->name !!}</option>
			@endforeach
		</select>

		<label for="title">{!! trans('admin.pages.field.title') !!}</label>
		{!! Form::text('title', $page->title, ['class' => 'form-control', 'id' => 'title']) !!}

		<label for="subtitle">{!! trans('admin.pages.field.subtitle') !!}</label>
		{!! Form::text('subtitle', $page->sub_title, ['class' => 'form-control', 'id' => 'subtitle']) !!}

		<label for="content">{!! trans('admin.pages.field.content') !!}</label>
		{!! Form::textarea('content', $page->content, ['class' => 'form-control', 'id' => 'content']) !!}
		{!! Form::submit(trans('admin.save'), ['class' => 'btn btn-primary btn-block']) !!}
	{!! Form::close() !!}
@endsection