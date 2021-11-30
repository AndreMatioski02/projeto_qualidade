<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE); 
?>

  <br/>
  <hr/>
  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-4">Reenvio de Senha</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
      <div class="form-row justify-content-center align-items-center">
        <div class="form-group col-md-7">
          <label for="inputEmail">Digite seu e-mail</label>
          <input type="text" class="form-control" id="inputEmail" placeholder="Informe seu e-mail e receba um link para recadastrar sua senha...">
          <br>
          <a href="/crudSimulacao/clientes/confirmSenha.php" role="button" class="btn btn-success btn-block">Enviar</a>
        </div>        
      </div>
    </div>
  </body>