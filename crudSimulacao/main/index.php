<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE); 
?>

  <br/>
  <hr/>
  <head>
    <link rel="stylesheet" href="/crudSimulacao/css/stylesIndex.css">    
  </head>
  
  <header>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <h1 class="display-4">Seja bem-vindo ao futuro em soluções para arquitetura!</h1>
        </div>
      </div>
      <br></br>
    </div>    
  </header>

  <body>
    <div class="container-carrossel">
      <div class="row justify-content-center align-items-center">        
        <div id="carouselSite" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li class="active" data-target="#carouselSite" data-slide-to="0"></li>
            <li class="active" data-target="#carouselSite" data-slide-to="1"></li>
            <li class="active" data-target="#carouselSite" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/crudSimulacao/imagens/carous1.jpg" class="img-fluid d-block">
              <div class="carousel-caption d-none d-md-block">
                  <h3>Soluções em Arquitetura Digital</h3>
                  <p>Na AJ Simulações, criamos simulações 3D ultra-realistas baseadas no seu projeto/planta, 
                    utilizando o que há de melhor em tecnologia de ponta!
                  </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/crudSimulacao/imagens/carous2.jpg" class="img-fluid d-block">
              <div class="carousel-caption d-none d-md-block">
                <h3>Diferencial para o seu negócio</h3>
                <p>Com simulações detalhistas e condizentes com o requisitado, é possível visualizar 
                  e interagir detalhadamente com sua futura construção.         
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/crudSimulacao/imagens/carous3.jpg" class="img-fluid d-block">
              <div class="carousel-caption d-none d-md-block">
                <h3>Tecnologia de ponta</h3>
                <p>Utilizamos software da mais alta qualidade disponível para desenvolvimento, fornecendo todo o suporte
                  necessário para que você alcance seus objetivos e aproveite nossos serviços.
                </p>
              </div>
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
    </div>  
    <hr>
    <br><br>
    <br><br>

    <div class="container">
      <div class="row justify-content-center align-items-center">
        <h1 class="display-6">Confira algumas de nossas demonstrações:</h1>
        <br><br>
      </div>
    </div>

    <div class="container-exemplos">
      <br><br>
      <h5>As versões abaixo estão disponíveis para download, porém, são apenas demonstrações básicas do poder
        de simulação e detalhe que possuimos. Envie uma requisição e peça seu projeto personalizado!
      </h4>
      <div class="row justify-content-center align-items-center">
          <div class="card priMeio">
              <img src="/crudSimulacao/imagens/card1.jpg" class="card-img-top" alt="Casa">
              <div class="card-body">
                  <h5 class="card-title">Casa</h5>
                  <span class="card-text">Demonstração da simulação de uma casa simples</span>
                  <br>
              </div>
              <a href="/crudSimulacao/main/downloadDemo.php" class="btn btn-md btn-light" role="button">Visualizar</a>                
          </div>
          <div class="card priMeio">
              <img src="/crudSimulacao/imagens/card2.jpg" class="card-img-top" alt="Apartamento">
              <div class="card-body">
                  <h5 class="card-title">Apartamento</h5>
                  <span class="card-text">Demonstração da simulação de um apartamento simples</span>
                  <br>
              </div>
              <a href="#" class="btn btn-md btn-light" role="button">Visualizar</a>                
          </div>
          <div class="card terc">
              <img src="/crudSimulacao/imagens/card3.jpg" class="card-img-top" alt="Condomínio">
              <div class="card-body">
                  <h5 class="card-title">Condomínio</h5>
                  <span class="card-text">Demonstração da simulação de um condomínio de prédios</span>
                  <br>
              </div>
              <a href="#" class="btn btn-md btn-light" role="button">Visualizar</a>                
          </div>
      </div>
      <a href="/crudSimulacao/clientes/insere.php" role="button" class="btn btn-outline-dark btn-lg btn-block">Faça já sua requisição!</a>
      <br><br>   
    </div>
  </body>
  
<?php
  include(FOOTER_TEMPLATE);
?>