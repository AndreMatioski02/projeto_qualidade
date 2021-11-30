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
                                        <h5 class="card-title">Boleto Bancário</h5>
                                        <p class="card-text">Um boleto foi gerado automaticamente para a efetuação do seu pagamento! Baixe-o ou imprima-o com o botão abaixo:</p>
                                        <a href="#" class="btn btn-outline-primary btn-block">Baixar</a>
                                        <br>
                                        <small>Este boleto tem data de vencimento própria, e o pagamento não é obrigatório.</small>
                                        <br><br>
                                        <h5 class="card-title">Projeto</h5>
                                        <p class="card-text"><strong>Título:</strong> Projeto apartamento Srta. Maria</p>
                                        <p class="card-text"><strong>Nome do cliente:</strong> Maria Antonieta dos Anjos</p>
                                        <p class="card-text"><strong>Valor a pagar: <span style="color: green">R$389,33</span></strong> com desconto (10%) à vista</p>
                                    </div>
                                </div>
                            </div>      
                            <br><br>       
                            <div class="container-aprovacao">
                                <div class="container text-left">
                                    <h1 class="card-title text-center">Aprovação do pagamento</h1>
                                    <div class="card-body">                                        
                                        <h4 class="card-title alert alert-success">Seu pagamento foi aprovado!</h4>
                                        <h6><strong>Linha digitável: </strong>75691.30359 01019.645207 28452.740054 5 87980000128726</h6>
                                        <h6><strong>Valor: </strong>R$389,33</h6>
                                        <h6><strong>Protocolo: </strong>2021112200000038933</h6>
                                        <br>
                                        <p class="card-text">Boletos bancários podem levar até 3 dias úteis para serem aprovados, portanto, se você pagou recentemente, não se preocupe!</p>
                                        <p class="card-text">Em caso de problemas ou dúvidas, contate-nos em nossa <a href="/crudSimulacao/clientes/atendimento.php">Central de Atendimento</a>.</p>
                                    </div>
                                    <br>
                                    <a class="btn btn-success btn-block btn-lg" href="#">Continuar</a>                
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