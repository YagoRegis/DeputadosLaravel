@extends('layouts.master')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-2">
            <img src="{{ $deputado['urlFoto'] }}" class="rounded" alt="...">
         </div>
         <div class="col-10">
            <div class="list-group">
               <div class="list-group-item">
                  <h5 class="mb-1">Nome</h5>
                  <p class="mb-1 text-right">{{ $deputado['nome'] }}</p>
               </div>
               <div class="list-group-item">
                  <h5 class="mb-1">Nascimento</h5>
                  <p class="mb-1 text-right">{{ $deputado['dataNascimento'] }} - {{ $deputado['municipioNascimento'] }}, {{ $deputado['ufNascimento'] }}</p>
               </div>
               <div class="list-group-item">
                  <h5 class="mb-1">Idade</h5>
                  <p class="mb-1 text-right">{{ $deputado['idade'] }} anos</p>
               </div>
               <div class="list-group-item">
                  <h5 class="mb-1">Partido - Estado</h5>
                  <p class="mb-1 text-right">{{ $deputado['siglaPartido'] }} - {{ $deputado['siglaUf'] }}</p>
               </div>
               <div class="list-group-item">
                  <h5 class="mb-1">Situação Eleitoral</h5>
                  <p class="mb-1 text-right">{{ $deputado['situacao'] }} - {{ $deputado['condicaoEleitoral'] }}</p>
               </div>
               <div class="list-group-item">
                  <h5 class="mb-1">Telefone do Gabinete</h5>
                  <p class="mb-1 text-right">{{ $deputado['telefone'] }}</p>
               </div>
               <div class="list-group-item">
                  <h5 class="mb-1">Email</h5>
                  <p class="mb-1 text-right">{{ $deputado['email'] }}</p>
               </div>
               <div class="list-group-item">
                  <h5 class="mb-1">Escolaridade</h5>
                  @if ($deputado['escolaridade'] != '')
                     <p class="mb-1 text-right">{{ $deputado['escolaridade'] }}</p>
                  @elseif ($deputado['escolaridade'] == '')
                     <p class="mb-1 text-right"> Escolaridade não informada </p>
                  @endif
               </div>
               <div class="list-group-item">
                  <h5 class="mb-1">Gabinete</h5>
                  @if ($deputado['andar'] != '')
                     <p class="mb-1 text-right">Sala {{ $deputado['sala'] }}, no anexo {{ $deputado['predio'] }}, {{ $deputado['andar'] }}° andar</p>
                  @elseif ($deputado['andar'] == '')
                     <p class="mb-1 text-right">Edifício principal, Sala {{ $deputado['sala'] }}</p>
                  @endif
               </div>
            </div>
         </div>
      </div>

      <div class="bs-callout bs-callout-danger">
         <h4>Gastos</h4>
         <a class="btn btn-outline-success" href="/deputados/deputado/{{ $deputado['id'] }}/despesas/1" role="button">Acesse os Gastos</a>
      </div>
   </div>
@endsection