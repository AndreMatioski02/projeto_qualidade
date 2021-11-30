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
                <a class="nav-link" href="/crudSimulacao/requisicoes/processoReqProjeto.php">Projeto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/crudSimulacao/requisicoes/processoReqCliente.php">Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/crudSimulacao/requisicoes/processoReqArquivo.php">Arquivos</a>
            </li>
            </ul>
        </div>
        <div class="card-body">
            <p class="card-text text-left"><strong>Arquivos relacionados a este projeto (clique para download)</strong></p>
            <ul class="list-group list-group-flush text-left">
                <li class="list-group-item"><strong>Arquivo do Cliente:</strong> <a style="color: black" href="#">planta.pdf</a></li>
                <li class="list-group-item"><strong>Simulação:</strong> <a style="color: black" href="#">simulacao_pronta.zip</a></li>
                <li class="list-group-item"><strong>Documentação:</strong> <a style="color: black" href="#">doc_simulacao.pdf</a></li>
            </ul>
        </div>
    </div>
    <br><br>
  </body>
<?php
  include(FOOTER_TEMPLATE);
?>