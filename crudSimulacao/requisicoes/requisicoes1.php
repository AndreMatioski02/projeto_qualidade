<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE2); 
?>

  <br/>
  <hr/>
  <head>
    <link rel="stylesheet" href="/crudSimulacao/css/stylesRequisicoes12.css">
  </head>

  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-4">Primeiros passos</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <h3 class="display-6">Para criar sua requisição, precisamos de algumas informações sobre seu projeto e cliente,
            para que possamos adaptar a simulação às suas necessidades:
        </h3>
        <br><br>
      </div>
    </div>

    <div class="container">
        <p>
            <button class="btn btn-outline-success btn-block" type="button" data-toggle="collapse" data-target="#formInfo" aria-expanded="false" aria-controls="formInfo">
                Começar
            </button>
        </p>
    </div>
    <hr>
    <br><br>
    <div class="collapse" id="formInfo">
      <div class="container caixa-roxa">
        <div class="container-inputs">
          <br>
          <h2>Informações do seu cliente</h2>
          <br>
          <div class="input-group mb-3 col-md-6">
              <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Este projeto é para</span>
                </div>
                <select class="form-control" name="selectCliente" id="selectCliente" aria-label="selectCliente" aria-describedby="basic-addon1">
                    <option value="0">Selecione um...</option>
                    <option value="1">Pessoa Física</option>
                    <option value="2">Pessoa Jurídica</option>
                    <option value="3">Pessoal</option>
                </select>    
            </div>
            <div class="input-group mb-3 col-md-11">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Nome do cliente</span>
                </div>
                <input type="text" class="form-control" id="nomeCliente" aria-describedby="basic-addon2" placeholder="Informe o nome do cliente para o qual a simulação se destina...">
            </div>

            <div class="input-group mb-3 col-md-11">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">E-mail do cliente</span>
                </div>
                <input type="email" class="form-control" placeholder="Informe o e-mail do cliente para o qual a simulação se destina..." aria-describedby="basic-addon3">
            </div>

            <div class="input-group mb-3 col-md-11">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon4">Estado</span>
                </div>
                <select class="form-control col-md-4" id="selectEstado">
                        <option>Selecione um estado...</option>
                </select>
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon5">Cidade</span>
                </div>
                <select class="form-control col-md-7" id="selectCidade">
                        <option>Selecione uma cidade...</option>
                </select>
            </div>

            <div class="input-group mb-3 col-md-11">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon3">Logradouro</span>
                </div>
                <input type="text" class="form-control" placeholder="(Opcional) Informe o logradouro para o qual o projeto se destina..." aria-describedby="basic-addon3">
            </div>

            <div class="input-group col-md-11">
                <div class="input-group-prepend">
                    <span class="input-group-text">Descrição</span>
                </div>
                <textarea class="form-control" aria-label="descricaoCliente" placeholder="(Opcional) Informe aqui os requisitos, necessidades, detalhes ou adicionais descritos pelo seu cliente, auxiliando-nos no desenvolvimento 3D..."></textarea>
            </div>
            <br>
        </div>
        <a href="/crudSimulacao/requisicoes/requisicoes2.php" class="btn btn-light btn-block" role="button">Avançar</a>
        <br>    
      </div>
    </div>
  </body>

<?php
  include(FOOTER_TEMPLATE);
?>