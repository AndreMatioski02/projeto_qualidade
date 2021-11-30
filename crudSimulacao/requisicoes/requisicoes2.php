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
          <h1 class="display-4">Quase lá</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <h3 class="display-6">Para criar sua requisição, precisamos de algumas informações sobre seu projeto,
            para que possamos adaptar a simulação às suas necessidades:
        </h3>
        <hr>
      </div>
    </div>
    
    <div class="container caixa-roxa">
        <div class="container-inputs">
            <br>
            <h2>Informações do projeto</h2>
            <br>
            <div class="input-group mb-3 col-md-8">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon6">Título</span>
                </div>
                <input type="text" class="form-control" id="tituloProjeto" aria-describedby="basic-addon6" placeholder="Informe o nome do seu projeto...">
            </div>

            <div class="input-group mb-3 col-md-8">
                <div class="input-group-prepend">
                    <span class="input-group-text">Prazo máximo para entrega 3D</span>
                </div>
                <input type="date" class="form-control" aria-label="orcamento">
            </div>

            <div class="input-group mb-3 col-md-8">
                <div class="input-group-prepend">
                    <span class="input-group-text">Orçamento máximo estimado (R$)</span>
                </div>
                <input type="number" class="form-control" aria-label="orcamento" placeholder="Apenas números...">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            <div class="input-group col-md-10">
                <div class="input-group-prepend">
                    <span class="input-group-text">Descrição</span>
                </div>
                <textarea class="form-control" aria-label="descricao" placeholder="Descreva aqui seu projeto, fornecendo informações relevantes à construção da simulação 3D (terreno, medidas, materiais, cômodos, detalhes)..."></textarea>
            </div>

            <br><br>
            <h5>Anexe abaixo o arquivo que representa seu projeto de arquitetura. É possível enviar arquivos de modelagens via software, fotos/arquivos de plantas,
                desenhos, templates e rascunhos. Nossa equipe irá analisar!
            </h5>
            <br>
            <div class="input-group col-md-10">
                <div class="input-group-prepend align-items-center">
                    <span class="input-group-text">Arquivo do projeto/planta</span>
                    <input style="margin-left: 1vw" type="file" class="form-control-file" id="arquivoProjeto">
                </div>                
            </div>

            <br>
            <div class="input-group mb-3 col-md-10">
              <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon7">Este arquivo é um(a)</span>
                </div>
                <select class="form-control" name="selectCliente" id="selectProjeto" aria-label="selectProjeto" aria-describedby="basic-addon7">
                    <option value="0">Selecione uma opção...</option>
                    <option value="1">Projeto completo</option>
                    <option value="2">Planta</option>
                    <option value="3">Desenho</option>
                    <option value="4">Rascunho</option>
                    <option value="5">Outro</option>
                </select>    
            </div>
            <br>
        </div>
        <a href="/crudSimulacao/requisicoes/reqSucesso.php" class="btn btn-light btn-block" role="button">Enviar</a>
        <br>
    </div>
   </body>
<?php
  include(FOOTER_TEMPLATE);
?>