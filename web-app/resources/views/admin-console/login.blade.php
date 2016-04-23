@extends('admin-console.layout.master-page')

@section('title', 'Home')

@section('sidebar')
@endsection

@section('content')
	<div class="col-md-4 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				Login
			</div>
			<div class="panel-body">
				{!! Form::open(['route' => ['admin.login']]) !!}
					<label for="email">E-mail</label>
					{!! Form::text('email', '', ['class' => 'form-control', 'id' => 'email']) !!}
					<label for="password">Password</label>
					{!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
					{!! Form::submit('entrar', ['class' => 'btn btn-primary btn-block']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection