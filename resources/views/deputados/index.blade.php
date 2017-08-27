@extends('layouts.master')

@section('content')

	<div class="container">
		<h1>Deputados</h1>

		@foreach ($deputados->dados as $deputado)
			<div class="panel panel-default">
				<img src="{{ $deputado->urlFoto }}" class="rounded-circle">
				<h3> {{ $deputado->nome }} </h3>
				<h4> {{ $deputado->siglaPartido }} - {{ $deputado->siglaUf }} </h4>
			</div>
		@endforeach

	</div>
	<div class="container">
		<nav aria-label="...">
	  		<ul class="pagination pagination-lg">
	    		<li class="page-item disabled">
	      			<a class="page-link" href="#" tabindex="-1">Previous</a>
	    		</li>
	    		<li class="page-item"><a class="page-link" href="/{{ $pagina + 1 }}">Next</a></li>
	    		<li class="page-item">
	      			<a class="page-link" href="#">Next</a>
	    		</li>
	  		</ul>
		</nav>
	</div>

@endsection