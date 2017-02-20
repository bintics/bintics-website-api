@extends('clients.layout.master-page')

@section('title', trans('clients.site_name'))

@section('head-content')
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top: -20px; min-height: 290px; background-color: #89e0fe;">
		<!-- Indicators -->
		<!--
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		-->

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="http://previews.123rf.com/images/venimo/venimo1406/venimo140600071/29465627-webdesign-and-programming-service-concept-illustration-in-flat-style-Stock-Vector.jpg" />
				<div class="carousel-caption">
					<h1 class="text-right">Soluciones integrales BINTICS</h1>
					<p class="text-right">Capacitación y desarrollo de aplicaciones a la medida</p>
				</div>
			</div>
			<!--
			<div class="item">
				<img src="..." alt="..." />
				<div class="carousel-caption">
					Desc 2
				</div>
			</div>
			-->
		</div>

		<!-- Controls -->
		<!--
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		-->
	</div>
@endsection

@section('content')
	<h1>
		Catálogo de cursos
	</h1>
@endsection