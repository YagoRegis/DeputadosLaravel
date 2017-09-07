@extends('layouts.master')

@section('content')
   <div class="container">
      <div class="text-center">
         <img src="{{ $deputado['urlFoto'] }}" class="rounded" alt="...">
      </div>
      <div class="list-group">
         <div class="list-group-item">
            <h5 class="mb-1">Nome</h5>
            <p class="mb-1">{{ $deputado['nome'] }}</p>
         </div>
         <div class="list-group-item">
            <h5 class="mb-1">Nascimento</h5>
            <p class="mb-1">{{ $deputado['dataNascimento'] }} - {{ $deputado['municipioNascimento'] }}, {{ $deputado['ufNascimento'] }}</p>
         </div>
         <div class="list-group-item">
            <h5 class="mb-1">Idade</h5>
            <p class="mb-1">{{ $deputado['idade'] }}</p>
         </div>
         <div class="list-group-item">
            <h5 class="mb-1">Partido - Estado</h5>
            <p class="mb-1">{{ $deputado['siglaPartido'] }} - {{ $deputado['siglaUf'] }}</p>
         </div>
         <div class="list-group-item">
            <h5 class="mb-1">Situação Eleitoral</h5>
            <p class="mb-1">{{ $deputado['situacao'] }} - {{ $deputado['condicaoEleitoral'] }}</p>
         </div>
         <div class="list-group-item">
            <h5 class="mb-1">Telefone do Gabinete</h5>
            <p class="mb-1">{{ $deputado['telefone'] }}</p>
         </div>
         <div class="list-group-item">
            <h5 class="mb-1">Email</h5>
            <p class="mb-1">{{ $deputado['email'] }}</p>
         </div>
         <div class="list-group-item">
            <h5 class="mb-1">Escolaridade</h5>
            <p class="mb-1">{{ $deputado['escolaridade'] }}</p>
         </div>
         <div class="list-group-item">
            <h5 class="mb-1">Gabinete</h5>
            <p class="mb-1">Sala {{ $deputado['sala'] }}, no prédio {{ $deputado['predio'] }}, {{ $deputado['andar'] }}° andar</p>
         </div>
      </div>

               <div class="bs-callout bs-callout-danger">
                  <h4>Gastos</h4>
                  <a class="btn btn-success" href="/deputados/deputado/{{ $deputado['id'] }}/despesas/1" role="button">Acesse os Gastos</a>
               </div>


   <!-- resumt -->
        <div class="panel panel-default">
               <div class="panel-heading resume-heading">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-xs-12 col-sm-3">
                           <figure>
                              <img class="img-fluid" alt="" src="{{ $deputado['urlFoto'] }}">
                           </figure>
                           <div class="row">
                              <div class="col-xs-12 social-btns">
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-google">
                                    <i class="fa fa-google"></i> </a>
                                 </div>
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-facebook">
                                    <i class="fa fa-facebook"></i> </a>
                                 </div>
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-twitter">
                                    <i class="fa fa-twitter"></i> </a>
                                 </div>
                              </div>
                            
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                           <ul class="list-group">
                           
                              <li class="list-group-item">{{ $deputado['nome'] }}</li>
                              <li class="list-group-item">{{ $deputado['dataNascimento'] }}</li>
                              <li class="list-group-item">{{ $deputado['idade'] }} anos</li>
                              <li class="list-group-item">{{ $deputado['siglaPartido'] }} - {{ $deputado['siglaUf'] }}</li>
                              <li class="list-group-item">{{ $deputado['situacao'] }} - {{ $deputado['condicaoEleitoral'] }} </li>
                              <li class="list-group-item"><i class="fa fa-phone"></i> {{ $deputado['telefone'] }} </li>
                              <li class="list-group-item"><i class="fa fa-envelope"></i> {{ $deputado['email'] }} </li>
                              
                              
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Research Interests</h4>
                  <p>
                     Software Engineering, Machine Learning, Image Processing,
                     Computer Vision, Artificial Neural Networks, Data Science,
                     Evolutionary Algorithms.
                  </p>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Prior Experiences</h4>
                  <ul class="list-group">
                     <a class="list-group-item inactive-link" href="#">
                        <h4 class="list-group-item-heading">
                           Software Engineer at Twitter
                        </h4>
                        <p class="list-group-item-text">
                           Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                           te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                        </p>
                     </a>
                     <a class="list-group-item inactive-link" href="#">
                        <h4 class="list-group-item-heading">Software Engineer at LinkedIn</h4>
                        <p class="list-group-item-text">
                           Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
                           Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
                           nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                        </p>
                        <ul>
                           <li>
                              Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
                              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
                              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                           </li>
                           <li>
                              Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
                              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
                              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                           </li>
                        </ul>
                        <p></p>
                     </a>
                  </ul>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Education</h4>
                  <table class="table table-striped table-responsive ">
                     <thead>
                        <tr>
                           <th>Degree</th>
                           <th>Graduation Year</th>
                           <th>CGPA</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Masters in Computer Science and Engineering</td>
                           <td>2014</td>
                           <td> 3.50 </td>
                        </tr>
                        <tr>
                           <td>BSc. in Computer Science and Engineering</td>
                           <td>2011</td>
                           <td> 3.25 </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
@endsection