<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE); 
?>

  <br/>
  <hr/>
  <head>
      <link rel="stylesheet" href="/crudSimulacao/css/stylesDownloadDemo.css">
  </head>
  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-5">(Demonstração) Simulação 3D - Casa</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="container-carrossel">        
                <div id="carouselSite" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#carouselSite" data-slide-to="0"></li>
                        <li class="active" data-target="#carouselSite" data-slide-to="1"></li>
                        <li class="active" data-target="#carouselSite" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/crudSimulacao/imagens/demo1.jpg" class="img-fluid d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="/crudSimulacao/imagens/demo2.jpg" class="img-fluid d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="/crudSimulacao/imagens/demo3.jpg" class="img-fluid d-block">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Avançar</span>
                    </a>
                </div>
            </div>
            <div class="container-downloads">                
                <div class="downloads">
                    <select class="form-control" name="selectTipoD" id="selectTipoD">
                        <option value="0">Selecione um arquivo...</option>
                        <option value="1">Simulação completa (zip)</option>
                        <option value="2">Planta (PDF)</option>
                        <option value="3">Documentação (PDF)</option>
                    </select>
                    <hr>
                    <a href="#" class="btn btn-primary btn-block" role="button">Download</a>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center caixa-comoF">
            <div class="container caixa-comoF-inner">
                <h3>Como funciona</h3>
                <p>
                    Por aqui, é possível baixar o arquivo executável (com suas subpastas) da aplicação/simulação 3D. Também fornecemos a opção de mudar o formato que o arquivo será baixado, podendo ser apenas como um documento (PDF, JPEG, etc) ou como a simulação executável em si.
                </p>
                <p>
                    Para que o programa possa rodar, seu computador precisa atender aos requisitos mínimos de hardware do Unity (<a href="https://docs.unity3d.com/Manual/system-requirements.html">Saiba mais</a>) e possuir os devidos pacotes de drivers e softwares préviamente instalados.
                </p>
                <p>
                    Certificando-se disto, basta efetuar o download, extrair, executar e visualizar seu projeto de forma ultra-realista. É simples assim!
                </p>

                <br>
                <h5 class="text-center">Esta simulação não serve para você? Solicite já sua própria solução personalizada!</h5>
                <br>
                <a href="/crudSimulacao/clientes/insere.php" role="button" class="btn btn-outline-light btn-lg btn-block">Solicitar simulação 3D</a>
            </div>
        </div>
        <br><br>
    </div>
  </body>
<?php
  include(FOOTER_TEMPLATE);
?>