@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>Deputados</h1>
		@foreach ($deputados->links as $link)
			@if($link->rel == "last")
				<?php
					preg_match('(pagina=\d+)', $link->href, $matches, PREG_OFFSET_CAPTURE);
					preg_match('(\d+)', $matches[0][0], $matches2, PREG_OFFSET_CAPTURE);
					$last = $matches2[0][0];
				?>
			@endif
		@endforeach
		@foreach ($deputados->dados as $deputado)
			<div class="panel panel-default">
				<img src="{{ $deputado->urlFoto }}" class="rounded-circle">
				<h3> {{ $deputado->nome }} </h3>
				<h4> {{ $deputado->siglaPartido }} - {{ $deputado->siglaUf }} </h4>
				<a class="btn btn-primary" href="/deputados/deputado/{{ $deputado->id }}" role="button">Link</a>
			</div>
		@endforeach

	</div>
	<div class="container">
		<nav aria-label="...">
	  		<ul class="pagination pagination-lg">
	  			<li class="page-item {{ ( $pagina == 1 ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/1" tabindex="/$pagina-1">First</a></li>
	    		<li class="page-item {{ ( $pagina == 1 ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/{{ $pagina - 1 }}" tabindex="/$pagina-1">Previous</a></li>
	    		<li class="page-item {{ ( $pagina == $last ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/{{ $pagina + 1 }}">Next</a></li>
	    		<li class="page-item {{ ( $pagina == $last ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/{{ $last }}">Last</a>
	    		</li>
	  		</ul>
		</nav>
	</div>

@endsection