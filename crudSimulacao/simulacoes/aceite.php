<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE2); 
?>
  <head>
    <link rel="stylesheet" href="/crudSimulacao/css/stylesAceite.css">    
  </head>
  <br/>
  <hr/>
  

  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-4">Contrato e Aceite</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
        <div class="form-row justify-content-center align-items-center">
            <div class="card-body">
                <div class="container-titulo">
                    <p class="card-text text-left" style="color: white;"><strong>Seu projeto</strong></p>
                </div>           
                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item"><strong>Título:</strong> Projeto apartamento Srta. Maria</li>
                    <li class="list-group-item"><strong>Prazo máximo estipulado:</strong> 10/12/2021</li>
                    <li class="list-group-item"><strong>Orçamento máximo estimado:</strong> R$15000.00</li>
                    <li class="list-group-item"><strong>Descrição:</strong> A análise dos edifícios, seus projetos e os hábitos dos usuários são alternativas para uma melhor compreensão das formas de habitar de uma sociedade. Neste sentido, e a fim de estabelecer uma perspectiva temporal, reportamos dados históricos sobre o desenvolvimento dos edifícios de apartamento.</li>
                    <li class="list-group-item"><strong>Resultado da análise: <span style="color: green">Viável</span></strong></li>
                </ul>
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="card-body">
                <div class="container-titulo">
                    <p class="card-text text-left" style="color: white;"><strong>Informações do cliente</strong></p>
                </div>  
                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item"><strong>Projeto para:</strong> Pessoa Física</li>
                    <li class="list-group-item"><strong>Nome:</strong> Maria Antonieta dos Anjos</li>
                    <li class="list-group-item"><strong>E-mail:</strong> mariantoni@gmail.com</li>
                    <li class="list-group-item"><strong>Descrição:</strong> Cliente tem grande vontade de interagir e visualizar seu apartamento, onde poderá revisar detalhes de acabamento, pintura, móveis e decoração para se satisfazer com sua residência.</li>
                </ul>
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="card-body">
                <div class="container-titulo">
                    <p class="card-text text-left" style="color: white;"><strong>Informações de desenvolvimento</strong></p>
                </div>  
                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item"><strong>Nome do projeto:</strong> Projeto Edifício Maria Antonieta</li>
                    <li class="list-group-item"><strong>Prazo estimado de conclusão:</strong> 25 dias úteis</li>
                    <li class="list-group-item"><strong>Valor a pagar:</strong> R$432.58 reais (formas de pagamento serão informadas após o aceite)</li>
                    <li class="list-group-item"><strong>Principal tecnologia utilizada:</strong> Unity 3D</li>
                    <li class="list-group-item"><strong>Formato de entrega:</strong> Arquivo executável (.exe) | Pastas e subpastas do projeto (.zip) | Documentação (.pdf) | Cópia do contrato (.pdf)</li>
                </ul>
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalContrato">
                Visualizar Contrato
            </button>
        </div>
        <br><br>

        
    </div>
  </body>

  <!-- Modal -->
    <div class="modal fade" id="modalContrato" tabindex="-1" aria-labelledby="nomeModalContrato" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nomeModalContrato">Aceite de Contrato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="contrato" class="form-control modal-body text-left">
                    <embed class="form-control" src="contrato.txt">
                </div>
                <div class="modal-footer align-items-center justify-content-center">
                    <span><strong>Abaixo, insira sua data de nascimento e selecione uma das opções (você só poderá selecionar uma vez)</strong></span>
                    <a href="/crudSimulacao/requisicoes/minhasReq.php" role="button" class="btn btn-danger col-md-3" data-dismiss="modal">Recusar</a>
                    <div class="form-group col-md-3">
                        <label for="inputNasc">Informe sua data de nascimento:</label>
                        <input type="date" class="form-control" id="inputNasc">
                    </div>
                    <a href="/crudSimulacao/simulacoes/formaPagamento.php" role="button" class="btn btn-success col-md-3">Aceitar</a>
                </div>
            </div>
        </div>
    </div>
<?php
    include(FOOTER_TEMPLATE);
?>