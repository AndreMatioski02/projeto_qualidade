<?php 
  require_once('config.php');
  include(HEADER_TEMPLATE); 
?>
  <div class="form-row justify-content-center align-items-center">
    <div style="padding: 50px">
      <h1>Sejam Bem Vindos!</h1>
    </div>
  </div>
  <hr>
  <div class="form-row justify-content-center align-items-center">
    <div style="padding-top: 50px">
    <h3>Escolha como deseja entrar</h3>
    <br>
    </div>
  </div>
  <div class="form-row justify-content-center align-items-center">
    <div class="form-group col-md-3" style="padding-right: 25px">
      <a type="button" class="btn btn-primary btn-lg btn-block" href="/crudPetShop/pngcliente.php">Cliente</a>
    </div>
    <div class="form-group col-md-3" style="padding-left: 25px">
      <a type="button" class="btn btn-primary btn-lg btn-block" href="/crudPetShop/pngfuncionario.php">Funcionário</a>
    </div>
  </div>
  <br>
  <br>
  <hr>
<?php
  include(FOOTER_TEMPLATE);
?>