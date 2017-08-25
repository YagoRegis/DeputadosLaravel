@extends('layouts.master')

@section('content')

	<div class="container">
		<h1>Deputados</h1>

		@foreach ($deputados->dados as $deputado)
			<div class="panel panel-default">
				<div class="panel-body">
					 {{ $deputado->nome }}
				</div>
			</div>
		@endforeach

	</div>

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

@endsection