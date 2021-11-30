<?php 
    // realizando as importações
    require_once('../funcoes.php');
    // chamando a função para inserir os dados no banco
?>

<?php
    // importando o cabeçalho padrão
    include(HEADER_TEMPLATE);
?>

  <br/>
  <hr/>
  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-4">Seja bem-vindo! Seu cadastro foi concluído com sucesso.</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
        <div class="botoes">
            <a href="/crudSimulacao/requisicoes/minhasReq.php" class="btn btn-primary btn-block" role="button">Ir para requisições</a>
            <a href="/crudSimulacao/main/index.php" class="btn btn-secondary btn-block" role="button">Voltar</a>
        </div>
    </div>
  </body>