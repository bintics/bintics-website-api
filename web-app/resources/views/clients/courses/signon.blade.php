@extends('clients.layout.master-page')

@section('title', trans('clients.courses.title'))

@section('content')
	<h2 class="page-header text-center" style="margin: 0 0 10px 0;">Curso "{!! $course->name !!}"</h2>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			{!! Form::open(['route' => ['client.courses.signon', $course->id]]) !!}
				<!--
				<label for="name">Nombre</label>
				{!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'name']) !!}
				-->

				<label for="email">Correo electrónico</label>
				{!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Correo electrónico', 'id' => 'email']) !!}

				<label for="password">Contraseña</label>
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'id' => 'password']) !!}

				<label for="confirm_password">Contraseña</label>
				{!! Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Confirmar contraseña', 'id' => 'confirm_password']) !!}
				<br />
				{!! Form::submit('Registrarme', ['class' => 'btn btn-primary btn-block']) !!}
			{!! Form::close() !!}
		</div>
	</div>
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-6 col-md-offset-3">
			@if (session('status'))
			    <div class="alert alert-warning">
			        {{ session('status') }}
			    </div>
			@endif
			<small>
				Al hacer clic en "Registrarme", aceptas las <a href="/about/legal-terms">Condiciones</a> y confirmas que leíste nuestra <a href="/about/privacy">Política de dato</a>, incluido el <a href="/about/cookies">uso de cookies</a>.
			</small>
		</div>
	</div>
@endsection