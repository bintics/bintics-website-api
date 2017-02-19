@extends('clients.layout.master-page')

@section('title', trans('clients.courses.title'))

@section('content')
	<h2>{!! $page->title !!}</h2>
	<h3>{!! $page->sub_title !!}</h3>
	<div class="row">
		{!! $page->content !!}
	</div>
@endsection