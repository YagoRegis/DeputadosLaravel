@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>Gastos</h1>
		@foreach ($gastos->links as $link)
			@if($link->rel == "last")
				<?php
					preg_match('(pagina=\d+)', $link->href, $matches, PREG_OFFSET_CAPTURE);
					preg_match('(\d+)', $matches[0][0], $matches2, PREG_OFFSET_CAPTURE);
					$last = $matches2[0][0];
				?>
			@endif
		@endforeach
		@foreach ($gastos_final as $gasto)
			<div class="panel panel-primary">
				<div class="panel-heading"> {{ $gasto['tipoDespesa'] }} </div>
				<div class="panel-body">
					<h4> {{ $gasto['nomeFornecedor'] }}</h4>
					<h4> {{ $gasto['dataDocumento'] }}</h4>
					<h4> {{ $gasto['valorDocumento'] }}</h4>
				</div>
			</div>
	<div class="card">
  <div class="card-header p-3 mb-2 bg-danger text-white">
    Featured
  </div>
  <div class="card-body">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
		@endforeach

	</div>
	<div class="container">
		<nav aria-label="...">
	  		<ul class="pagination pagination-lg">
	  			<li class="page-item {{ ( $pagina == 1 ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/deputado/{{ $id }}/despesas/1" tabindex="/$pagina-1">First</a></li>
	    		<li class="page-item {{ ( $pagina == 1 ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/deputado/{{ $id }}/despesas/{{ $pagina - 1 }}" tabindex="/$pagina-1">Previous</a></li>
	    		<li class="page-item {{ ( $pagina == $last ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/deputado/{{ $id }}/despesas/{{ $pagina + 1 }}">Next</a></li>
	    		<li class="page-item {{ ( $pagina == $last ) ? 'disabled' : ''}}"><a class="page-link" href="/deputados/deputado/{{ $id }}/despesas/{{ $last }}">Last</a>
	    		</li>
	  		</ul>
		</nav>
	</div>

@endsection