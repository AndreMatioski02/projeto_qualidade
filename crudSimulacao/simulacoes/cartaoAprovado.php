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
                                        <h5 class="card-title">Cartão de Crédito</h5>
                                        <p class="card-text">Seu pagamento está sob análise, aguarde a aprovação do mesmo.</p>
                                        <p class="card-text">Pagamento feito com:</p>
                                        <img src="/crudSimulacao/imagens/mastercarLogo.jpg" class="img-fluid d-block" style="width: 5rem;">
                                        <br>
                                        <p class="card-text">12x de R$56,90 sem juros</p>
                                        <br><br>
                                        <h5 class="card-title">Projeto</h5>
                                        <p class="card-text"><strong>Título:</strong> Projeto apartamento Srta. Maria</p>
                                        <p class="card-text"><strong>Nome do cliente:</strong> Maria Antonieta dos Anjos</p>
                                        <p class="card-text"><strong>Valor a pagar: <span style="color: green">R$56,90</span></strong> em 12x sem juros</p>
                                    </div>
                                </div>
                            </div>      
                            <br><br>       
                            <div class="container-aprovacao">
                                <div class="container text-left">
                                    <h1 class="card-title text-center">Aprovação do pagamento</h1>
                                    <div class="card-body">                                        
                                        <h4 class="card-title alert alert-success">Seu pagamento foi aprovado!</h4>
                                        <h6><strong>Nome do titular: </strong>Maria A Anjos</h6>
                                        <h6><strong>Nº do cartão: </strong>**** **** **** 8903</h6>
                                        <h6><strong>Valor total: </strong>R$682,80 em 12x</h6>
                                        <h6><strong>Protocolo: </strong>1025712200000074391</h6>
                                        <br>
                                        <p class="card-text">O pagamento pode levar até 2 dias úteis para ser aprovado, não se preocupe!</p>
                                        <p class="card-text">Em caso de problemas ou dúvidas, contate-nos em nossa <a href="/crudSimulacao/clientes/atendimento.php">Central de Atendimento</a>.</p>
                                    </div>
                                    <br>
                                    <button class="btn btn-success btn-block btn-lg">Continuar</button>                      
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