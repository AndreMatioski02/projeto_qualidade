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
                    <h1 class="display-4">Aprovação do Pagamento</h1>
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
                        <p class="card-text text-left" style="color: white;"><strong>Informações do pagamento</strong></p>
                    </div>  
                    <ul class="list-group list-group-flush text-left">
                        <li class="list-group-item">
                            <div class="container-info">
                                <div class="card justify-content-center align-items-center" style="width: 18rem;">                               
                                    <div class="card-body">
                                        <h5 class="card-title">PIX</h5>
                                        <p class="card-text">Pague agora usando seu pix, por meio de QR Code ou Código Pix</p>
                                        <img src="/crudSimulacao/imagens/QRCodeSimulacao.jpg" class="img-fluid d-block">
                                        <br>
                                        <small>O pix ficará disponível durante 2 hora, após esse período o mesmo não estará mais válido!</small>
                                        <br><br>
                                        <h5 class="card-title">Projeto</h5>
                                        <p class="card-text"><strong>Título:</strong> Projeto apartamento Srta. Maria</p>
                                        <p class="card-text"><strong>Nome do cliente:</strong> Maria Antonieta dos Anjos</p>
                                        <p class="card-text"><strong>Valor a pagar: <span style="color: green">R$1.789,50</span></strong> com desconto (10%) à vista</p>
                                    </div>
                                </div>
                            </div>      
                            <br><br>       
                            <div class="container-aprovacao">
                                <div class="container text-left">
                                    <h1 class="card-title text-center">Aprovação do pagamento</h1>
                                    <div class="card-body">                                        
                                        <h4 class="card-title alert alert-info">Pague já usando o Código PIX (copia e cola)</h4>
                                        <button class="btn btn-outline-success btn-sm float-right">Copiar</button>
                                        <h6><strong>Código PIX: </strong>00020126580014br.gov.bcb.pix0136123e4567-e12b-12d1-a456-426655440000 5204000053039865802BR5913Maria Antonieta6008BRASILIA62070503***63041D3D</h6>
                                        <h6><strong>Valor: </strong>R$1.789,50</h6>
                                        <h6><strong>Protocolo: </strong>2041112205600098944</h6>
                                        <br>
                                        <p class="card-text">Em caso de problemas ou dúvidas, contate-nos em nossa <a href="/crudSimulacao/clientes/atendimento.php">Central de Atendimento</a>.</p>
                                    </div>
                                    <br>
                                    <button class="btn btn-outline-success btn-block btn-lg" disabled="disabled">Continuar</button>                      
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>                
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

        .container-info{
            width: 30%;
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            float:left;
            background-color: lightgrey;
        }

        .container-aprovacao{
            width: 70%;
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            float: left;
        }

        .container-info .card-body{
            background-color: lightgray;
        }
    </style>

<?php
    include(FOOTER_TEMPLATE);
?>