@extends('clients.layout.master-page')

@section('title', trans('clients.courses.title'))

@section('content')
	<h2 class="page-header text-center" style="margin: 0 0 10px 0;">Registro completado</h2>
	<div class="alert alert-success">
		<strong>Listo!</strong> Te has registrado correctamente al curso de <strong>{!! $course->name !!}</strong>
	</div>
@endsection