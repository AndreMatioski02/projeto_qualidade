<?php 
  require_once('config.php');
  include(HEADER_TEMPLATE); 
?>

<div style="padding-top: 100px">
    <div>
        <h2>Escolha a opção desejada e bom trabalho!</h2>
        <br>
        <br>
    </div>
    <hr>
    <div class="form-row justify-content-center align-items-center">
        <div class="form-group col-md-3" style="padding-left: 25px">
            <a type="button" class="btn btn-primary btn-lg btn-block" href="/crudPetShop/funcionario/index.php">Área do Funcionário</a>
        </div>
    </div>
    <hr>
    <div class="form-row justify-content-center align-items-center">
        <div class="form-group col-md-3" style="padding-left: 25px">
            <a type="button" class="btn btn-primary btn-lg btn-block" href="/crudPetShop/agendamento/index.php">Agendamentos</a>
        </div>
    </div>
    <hr>
    <div class="form-row justify-content-center align-items-center">
        <div class="form-group col-md-3" style="padding-left: 25px">
            <a type="button" class="btn btn-primary btn-lg btn-block" href="/crudPetShop/servico/index.php">Serviços</a>
        </div>
    </div>
    <hr> 
</div>

<?php
  include(FOOTER_TEMPLATE);
?>