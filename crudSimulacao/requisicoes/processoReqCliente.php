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
                <a class="nav-link active" href="/crudSimulacao/requisicoes/processoReqCliente.php">Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/crudSimulacao/requisicoes/processoReqArquivo.php">Arquivos</a>
            </li>
            </ul>
        </div>
        <div class="card-body">
            <p class="card-text text-left"><strong>Informações referentes ao cliente de destino</strong></p>
            <ul class="list-group list-group-flush text-left">
                <li class="list-group-item"><strong>Projeto para:</strong> Pessoa Física</li>
                <li class="list-group-item"><strong>Nome do cliente:</strong> Maria Antonieta dos Anjos</li>
                <li class="list-group-item"><strong>E-mail do cliente:</strong> mariantoni@gmail.com</li>
                <li class="list-group-item"><strong>Estado:</strong> SC</li>
                <li class="list-group-item"><strong>Cidade:</strong> Mafra</li>
                <li class="list-group-item"><strong>Logradouro:</strong> Rua dos Projetos Arquitetônicos, 656, apt. 05, Bairro Arquitetura</li>
                <li class="list-group-item"><strong>Descrição:</strong> Cliente tem grande vontade de interagir e visualizar seu apartamento, onde poderá revisar detalhes de acabamento, pintura, móveis e decoração para se satisfazer com sua residência.</li>
            </ul>
        </div>
    </div>
    <br><br>
  </body>
<?php
  include(FOOTER_TEMPLATE);
?>