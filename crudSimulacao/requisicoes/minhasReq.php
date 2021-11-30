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
            <h1 class="display-4 text-left">Minhas Requisições</h1>
        </div>
        <div class="botao text-right">
            <a role="button" class="btn btn-outline-info" href="/crudSimulacao/requisicoes/requisicoes1.php">Nova Requisição</a>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
        <div class="row justify-content-center align-items-center caixa-requisicoes">
            <br>
            <div class="list-group">
                <a href="/crudSimulacao/requisicoes/processoReqProjeto.php" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Projeto apartamento Srta. Maria</h5>
                        <small>agora mesmo</small>
                    </div>
                    <p class="mb-1 text-left">Visualize aqui o progresso e as informações deste projeto e seu cliente!</p>
                    <small>Existem novas atualizações!</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Casa p/ Sr. Osvaldo</h5>
                        <small class="text-muted">3 dias atrás</small>
                    </div>
                    <p class="mb-1 text-left">Visualize aqui o progresso e as informações deste projeto e seu cliente!</p>
                    <small class="text-muted">Nenhuma nova atualização</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Minha futura mansão</h5>
                        <small class="text-muted">2 semanas atrás</small>
                    </div>
                    <p class="mb-1 text-left">Visualize aqui o progresso e as informações deste projeto e seu cliente!</p>
                    <small class="text-muted">Nenhuma nova atualização</small>
                </a>
            </div>
            <br>
            <a href="/crudSimulacao/requisicoes/requisicoes1.php" role="button" class="btn btn-light btn-lg btn-block">Nova requisição</a>
            <br>
        </div>
        <br><br>
        <br><br>
    </div>
  </body>

  <style type="text/css">
    .caixa-requisicoes{
      display: flex;
      flex-direction: column;
      width: 105%;
      background-color: #44245E;
      margin-top: 3%;
      margin-bottom: 3vh;
    }
  </style>
<?php
  include(FOOTER_TEMPLATE);
?>