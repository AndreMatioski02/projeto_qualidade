<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE2); 
?>

  <br/>
  <hr/>
  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-4">Acompanhamento</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
      <div class="row">
        <h3 class="display-6">Abaixo, você pode acompanhar o status da análise/desenvolvimento da sua requisição.</h3>
        <br><br>
      </div>
    </div>
    <div class="card text-center">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="/crudSimulacao/requisicoes/processoReqProjeto.php">Projeto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/crudSimulacao/requisicoes/processoReqCliente.php">Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/crudSimulacao/requisicoes/processoReqArquivo.php">Arquivos</a>
          </li>
          </ul>
      </div>
      <div class="card-body">
        <p class="card-text text-left"><strong>Informações referentes ao projeto em análise</strong></p>
          <ul class="list-group list-group-flush text-left">
            <li class="list-group-item"><strong>Título:</strong> Projeto apartamento Srta. Maria</li>
            <li class="list-group-item"><strong>Prazo máximo estipulado:</strong> 10/12/2021</li>
            <li class="list-group-item"><strong>Orçamento máximo estimado:</strong> R$15000.00</li>
            <li class="list-group-item"><strong>Descrição:</strong> A análise dos edifícios, seus projetos e os hábitos dos usuários são alternativas para uma melhor compreensão das formas de habitar de uma sociedade. Neste sentido, e a fim de estabelecer uma perspectiva temporal, reportamos dados históricos sobre o desenvolvimento dos edifícios de apartamento.</li>
          </ul>
      </div>

      <br>
      <div class="card-body">
        <p class="card-text text-left"><h3 class="text-left">Progresso</h3></p>
        <p class="card-text text-left"><h6 class="text-left">Clique em uma das barras para ver mais!</h6></p>
        <br>
        <a href="/crudSimulacao/simulacoes/viabilidadeOK.php">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Análise de viabilidade</div>
          </div>
        </a>
        <br>

        <a href="/crudSimulacao/simulacoes/aceite.php">
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Aceite do cliente</div>
          </div>
        </a>        
        <br>
        <a href="/crudSimulacao/simulacoes/boletoAguardando.php">
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Aprovação do pagamento</div>
          </div>
        </a>
        <br>
        <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Desenvolvimento e Modelagem 3D</div>
        </div>
        <br>
        <div class="progress">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Entrega e Feedback</div>
        </div>
      </div>
      <br><br>
    </div>
    <br><br>
  </body>

  <style type="text/css">
    .progress-bar{
      font-size: 1.2rem;
      font-weight: bold;
    }

    .progress{
      height: 8vh;
    }
  </style>

<?php
  include(FOOTER_TEMPLATE);
?>