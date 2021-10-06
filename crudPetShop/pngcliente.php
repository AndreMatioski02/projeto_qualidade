<?php 
  require_once('config.php');
  include(HEADER_TEMPLATE); 
?>

<div style="padding-top: 100px">
    <div>
        <h2>Aproveite a disponibilidade dos nossos serviços!</h2>
        <br>
        <br>
    </div>
    <hr>
    <div class="form-row justify-content-center align-items-center">
        <div class="form-group col-md-3" style="padding-left: 25px">
            <a type="button" class="btn btn-primary btn-lg btn-block" href="/crudPetShop/cliente/index.php">Área do Cliente</a>
        </div>
    </div>
    <hr>
    <div class="form-row justify-content-center align-items-center">
        <div class="form-group col-md-3" style="padding-left: 25px">
            <a type="button" class="btn btn-primary btn-lg btn-block" href="/crudPetShop/animal/index.php">Área do Pet</a>
        </div>
    </div>
    <hr> 
</div>

<?php
  include(FOOTER_TEMPLATE);
?>
