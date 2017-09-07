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
			<div class="card-columns text-center">
				@foreach ($deputados->dados as $deputado)
					<div class="card">
						<div class="card-header">
		    				{{ $deputado->nome }}
		  				</div>
		    			<div class="card-body">
		    				<img class="img-fluid" src="{{ $deputado->urlFoto }}" alt="Card image cap">
		      				<p class="card-text"> {{ $deputado->siglaPartido }} - {{ $deputado->siglaUf }} </p>
		      				<a class="btn btn-outline-danger" href="/deputados/deputado/{{ $deputado->id }}">Acesse</a>
		    			</div>
					</div>
				@endforeach
			</div>

	</div>
	<div class="container">
		<nav aria-label="...">
	  		<ul class="pagination justify-content-center">
	  			<li class="page-item {{ ( $pagina == 1 ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/1" tabindex="/$pagina-1">First</a></li>
	    		<li class="page-item {{ ( $pagina == 1 ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/{{ $pagina - 1 }}" tabindex="/$pagina-1">Previous</a></li>
	    		<li class="page-item {{ ( $pagina == $last ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/{{ $pagina + 1 }}">Next</a></li>
	    		<li class="page-item {{ ( $pagina == $last ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/{{ $last }}">Last</a>
	    		</li>
	  		</ul>
		</nav>
	</div>

@endsection