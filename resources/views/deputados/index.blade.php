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

@endsection