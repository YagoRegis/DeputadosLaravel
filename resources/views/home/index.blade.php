@extends('layouts.master')

@section('content')
	
	<div class="jumbotron">
    	<div class="container">
        	<h1 class="display-3">Câmara dos Deputados</h1>
        	<p>A ideia deste site é fuder os pólíticos e mostrar que eles gastam para um caralho o nosso dinheiro!! PAZ</p>
        	<p><a class="btn btn-primary btn-lg" href="#" role="button">QQ &raquo;</a></p>
      	</div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
    <div class="row">
    	<div class="col-md-4">
        	<h2>Deputados</h2>
          	<p>Acesse e veja todos os deputados em exercício atualmente, veja de qual partido ele pertence e quanto gastou até o momento em seu mandato! </p>
          	<p><a class="btn btn-secondary" href="/deputados/1" role="button">Ver Deputados &raquo;</a></p>
        </div>
        <div class="col-md-4">
        	<h2>Proposições</h2>
          	<p>SAiba o que está rolando na Câmara atualmente. Se eles estão aprovando ou bom ou apenas coisas inúteis! </p>
          	<p><a class="btn btn-secondary" href="/deputados/1" role="button">Ver Deputados &raquo;</a></p>
        </div>
    </div>

@endsection