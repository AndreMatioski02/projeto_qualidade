<!-- IMPORTANDO O HEADER -->
<?php 
  require_once('../config.php');
  include(HEADER_TEMPLATE); 
?>

<div class="container" style="margin-top: 5%">
    <h1>Um pouco sobre nós!</h1> 
    <div class="form-row justify-content-center align-items-center" style="margin-top: 5%">   
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Quem somos?</a>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Onde estamos?</button>
            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Nossa proposta</a>
            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">Vantagens</a>
        </p>
    </div>
    <div class="container">
        <div class="form-row justify-content-center align-items-center">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                <h2 class="card card-body">
                    Quem somos?
                </h2>
                    <div class="card card-body">
                        Somos uma empresa online, que através de simulações realistas trazemos vantagens para engenheiros e arquitetos mostrarem seu trabalho final!
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <h2 class="card card-body">
                        Onde estamos?
                    </h2>
                    <div class="card card-body">
                        Nossa empresa é 100% online, não possuindo loja ou estabelecimento físico. Contudo é possível entrar em contato conosco através das redes sociais, email ou pelo nosso site.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                    <h2 class="card card-body">
                        Nossa Proposta
                    </h2>
                    <div class="card card-body">
                        Nossa proposta é trazer um diferencial para nossos clientes, hoje em dia em um mundo tão tecnológico temos como objetivo mostrar para as pessoas um mundo ainda não existente através da simulação 3D realista.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample4">
                    <h2 class="card card-body">
                        Vantagens
                    </h2>
                    <div class="card card-body">
                        - O cliente consegue ver como ficará o produto final, com isso mudanças podem ser feitas para evitar futuras complicações em obras.
                    </div>
                    <div class="card card-body">
                        - Trazemos o diferencial tecnológico para arquitetos e engenheiros.
                    </div>
                    <div class="card card-body">
                        - Poupamos seu trabalho! Nossas equipe é composta por profissionais dedicados a sua simulação. Desta forma, as entregas são feitas eficientemente, permitindo que os clientes se sintam mais atraídos ao seu serviço.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<br><br>

<?php
  include(FOOTER_TEMPLATE);
?>