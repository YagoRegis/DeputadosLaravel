@extends('layouts.master')

@section('content')
	<div class="container">
		<h1> Gastos </h1>
		<h4 class="display-4"> Deputado: {{ $deputado->dados->nomeCivil }} </h4>
		@foreach ($links as $link)
			@if($link->rel == "last")
				<?php
					preg_match('(pagina=\d+)', $link->href, $matches, PREG_OFFSET_CAPTURE);
					preg_match('(\d+)', $matches[0][0], $matches2, PREG_OFFSET_CAPTURE);
					$last = $matches2[0][0];
				?>
			@endif
		@endforeach
		@foreach ($gastos_final as $gasto)
			<div class="card bg-light mb-3">
		  		<div class="card-header"> {{ $gasto['tipoDespesa'] }} </div>
		  		<div class="card-body">
		    		<h4 class="card-title"> Valor: {{ $gasto['valorDocumento'] }} </h4>
		    		<p class="card-text"> Fornecedor: {{ $gasto['nomeFornecedor'] }} </p>
		    		<p class="card-text"> Data: {{ $gasto['dataDocumento'] }} </p>
		  		</div>
			</div>
		@endforeach

	</div>
	<div class="container">
		<nav aria-label="...">
	  		<ul class="pagination pagination-lg">
	  			<li class="page-item {{ ( $pagina == 1 ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/deputado/{{ $deputado->dados->id }}/despesas/1" tabindex="/$pagina-1">First</a></li>
	    		<li class="page-item {{ ( $pagina == 1 ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/deputado/{{ $deputado->dados->id }}/despesas/{{ $pagina - 1 }}" tabindex="/$pagina-1">Previous</a></li>
	    		<li class="page-item {{ ( $pagina == $last ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/deputado/{{ $deputado->dados->id }}/despesas/{{ $pagina + 1 }}">Next</a></li>
	    		<li class="page-item {{ ( $pagina == $last ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/deputado/{{ $deputado->dados->id }}/despesas/{{ $last }}">Last</a>
	    		</li>
	  		</ul>
		</nav>
	</div>

@endsection