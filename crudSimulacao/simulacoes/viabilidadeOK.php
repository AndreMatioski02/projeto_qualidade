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
          <h1 class="display-4">Viabilidade</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
      <div class="form-row justify-content-center align-items-center">
        <div class="card-body">
            <ul class="list-group list-group-flush text-left">
                <li class="list-group-item text-center" style="background-color:green;"><strong><h4 style="color: white;">Sucesso! Seu projeto é viável e já pode ser desenvolvido!</h4></strong></li>
                <br>
                <div class="container-titulo">
                  <p class="card-text text-left" style="color: white;"><strong>Informações referentes ao projeto</strong></p>
                </div>  
                <li class="list-group-item"><strong>Título:</strong> Projeto apartamento Srta. Maria</li>
                <li class="list-group-item"><strong>Prazo máximo estipulado:</strong> 10/12/2021</li>
                <li class="list-group-item"><strong>Orçamento máximo estimado:</strong> R$15000.00</li>
                <li class="list-group-item"><strong>Descrição:</strong> A análise dos edifícios, seus projetos e os hábitos dos usuários são alternativas para uma melhor compreensão das formas de habitar de uma sociedade. Neste sentido, e a fim de estabelecer uma perspectiva temporal, reportamos dados históricos sobre o desenvolvimento dos edifícios de apartamento.</li>
                <li class="list-group-item text-center"><strong>No botão abaixo, você seguirá para a página de aceite, onde poderá refutar ou concordar para que possamos dar andamento ao desenvolvimento de sua simulação 3D.</strong></li>
            </ul>
        </div>
        <a class="btn btn-success btn-block" href="/crudSimulacao/simulacoes/aceite.php" role="button">Continuar</a>
        <br><br>
        <br><br>
      </div>
    </div>
  </body>

  <style type="text/css">
    .container-titulo{
        background-color: #44245E;
        height: 9vh;
        padding-left: 2ch;
        padding-top: 2vh;
    }
  </style>

<?php
    include(FOOTER_TEMPLATE);
?>