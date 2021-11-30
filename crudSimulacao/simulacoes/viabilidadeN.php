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
                    <li class="list-group-item text-center" style="background-color: firebrick;"><strong><h4 style="color: white;">O projeto não é viável com base nas informações fornecidas. Tente novamente!</h4></strong></li>
                    <br>
                    <div class="container-titulo">
                      <p class="card-text text-left" style="color: white;"><strong>Informações referentes ao projeto</strong></p>
                    </div>   
                    <li class="list-group-item"><strong>Título:</strong> Projeto apartamento Srta. Maria</li>
                    <li class="list-group-item"><strong>Prazo máximo estipulado:</strong> 10/12/2021</li>
                    <li class="list-group-item"><strong>Orçamento máximo estimado:</strong> R$15000.00</li>
                    <li class="list-group-item"><strong>Descrição:</strong> A análise dos edifícios, seus projetos e os hábitos dos usuários são alternativas para uma melhor compreensão das formas de habitar de uma sociedade. Neste sentido, e a fim de estabelecer uma perspectiva temporal, reportamos dados históricos sobre o desenvolvimento dos edifícios de apartamento.</li>
                </ul>
                <br><br>
                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item text-center titulo-nota"><strong>Nota do Desenvolvedor</strong></li>
                    <li class="list-group-item text-left">O projeto requisitado não é viável devido ao curto prazo estipulado pelo cliente, trata-se de um projeto grande que não pode ser desenvolvido no espaço de tempo fornecido. Em caso de necessidade, requisitamos um maior período de tempo para desenvolvimento ou a diminuição das requisições descritas.</li>
                </ul>
            </div>
            <br><br>
        </div>
        <a class="btn btn-success btn-block" href="#" role="button">Editar e reenviar requisição</a>
        <a class="btn btn-info btn-block" href="/crudSimulacao/requisicoes/requisicoes1.php" role="button">Nova Requisição</a>
        <a class="btn btn-outline-danger btn-block" href="/crudSimulacao/requisicoes/minhasReq.php" role="button">Voltar</a>
        <br><br>
        <br><br>
    </div>
  </body>

  <style type="text/css">
    .container-titulo{
        background-color: #44245E;
        height: 9vh;
        padding-left: 2ch;
        padding-top: 2vh;
    }

    .titulo-nota{
      background-color: lightseagreen;
    }
  </style>

<?php
    include(FOOTER_TEMPLATE);
?>