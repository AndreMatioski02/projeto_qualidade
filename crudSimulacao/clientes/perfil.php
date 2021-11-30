<?php 
    // realizando as importações
    require_once('../funcoes.php');
    // chamando a função para inserir os dados no banco
?>

<?php
    // importando o cabeçalho padrão
    include(HEADER_TEMPLATE2);
?>
    <head>
        <link hel="stylesheet" href="/crudSimulacao/css/stylePerfil.css">
    </head>
    <br>
    <hr>
    <h1>Meu Perfil</h1>
    <hr>
    <br>
    <div class="container-perfil">
        <div class="form-row justify-content-center align-items-center linha">
            <div class="bloco col">
                <p>
                    <a class="btn btn-primary btn-block" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Sobre mim</a>
                </p>
                <div class="collapse multi-collapse text-left" id="multiCollapseExample1">
                    <h4 class="card card-body">
                        Minhas Informações
                    </h4>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nome:</strong> André Vinícius Matioski</li>
                        <li class="list-group-item"><strong>CPF:</strong> 072.067.299-67</li>
                        <li class="list-group-item"><strong>Data de Nascimento:</strong> 02/05/2001</li>
                        <li class="list-group-item"><strong>Telefone:</strong> (47) 9 8418-6995</li>
                        <li class="list-group-item"><strong>Estado:</strong> SC</li>
                        <li class="list-group-item"><strong>Cidade:</strong> Mafra</li>
                        <li class="list-group-item"><strong>Bairro:</strong> Centro</li>
                        <li class="list-group-item"><strong>Logradouro:</strong> São João Maria - nº:333</li>
                        <li class="list-group-item"><strong>Email:</strong> matioskiandre4@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="bloco col">
                <p>
                    <a class="btn btn-primary btn-block" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Meus pagamentos</a>
                </p>
                    <div class="collapse multi-collapse text-left" id="multiCollapseExample2">
                        <h2 class="card card-body">
                            Histórico de pagamento(s)
                        </h2>
                        <ul class="list-group">
                        <li class="list-group-item"><strong>Nome do projeto:</strong> Projeto Apartamento Srta. Maria</li>
                            <li class="list-group-item"><strong>Tipo de pagamento:</strong> Pix</li>
                            <li class="list-group-item"><strong>Valor:</strong> R$3400,00</li>
                            <li class="list-group-item"><strong>Data pagamento:</strong> 10/08/2012</li>
                        </ul>
                        <br>
                        <ul class="list-group">
                        <li class="list-group-item"><strong>Nome do projeto:</strong>Casa p/ Sr. Osvaldo</li>
                            <li class="list-group-item"><strong>Tipo de pagamento:</strong> Cartão de crédito</li>
                            <li class="list-group-item"><strong>Valor:</strong> R$2000,00</li>
                            <li class="list-group-item"><strong>Parcelamento:</strong> 12X</li>
                            <li class="list-group-item"><strong>Cartão:</strong> **** **** **** 8902</li>
                        </ul>
                        <br>
                        <p>
                            <a class="btn btn-primary btn-block" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">Ver Mais</a>
                        </p>
                            <div class="collapse multi-collapse text-left" id="multiCollapseExample4">
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Nome do projeto:</strong> Minha futura mansão</li>
                                    <li class="list-group-item"><strong>Tipo de pagamento:</strong> Boleto</li>
                                    <li class="list-group-item"><strong>Valor:</strong> R$12300,00</li>
                                    <li class="list-group-item"><strong>Data vencimento:</strong> 12/08/2012</li>
                                    <li class="list-group-item"><strong>Data pagamento:</strong> 10/08/2012</li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center linha">
            <div class="bloco col">
                <p>
                    <a class="btn btn-primary btn-block" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Meus Clientes</a>
                </p>
                <div class="collapse multi-collapse text-left" id="multiCollapseExample3">
                    <h4 class="card card-body">
                        Informações sobre clientes
                    </h4>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nome:</strong> Maria Antonieta dos Anjos</li>
                        <li class="list-group-item"><strong>CPF:</strong> 072.067.299-67</li>
                        <li class="list-group-item"><strong>Data de Nascimento:</strong> 02/05/2001</li>
                        <li class="list-group-item"><strong>Telefone:</strong> (47) 9 8418-6995</li>
                        <li class="list-group-item"><strong>Estado:</strong> SC</li>
                        <li class="list-group-item"><strong>Cidade:</strong> Mafra</li>
                        <li class="list-group-item"><strong>Bairro:</strong> Bairro Arquitetura</li>
                        <li class="list-group-item"><strong>Logradouro:</strong> Rua dos Projetos Arquitetônicos, 656, apt. 05</li>
                        <li class="list-group-item"><strong>Email:</strong> mariantoni@gmail.com</li>
                    </ul>
                    <br>
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nome:</strong> Osvaldo da Cruz</li>
                        <li class="list-group-item"><strong>CPF:</strong> 072.067.299-67</li>
                        <li class="list-group-item"><strong>Data de Nascimento:</strong> 02/05/2001</li>
                        <li class="list-group-item"><strong>Telefone:</strong> (47) 9 8418-6995</li>
                        <li class="list-group-item"><strong>Estado:</strong> SC</li>
                        <li class="list-group-item"><strong>Cidade:</strong> Mafra</li>
                        <li class="list-group-item"><strong>Bairro:</strong> Bairro Nobre</li>
                        <li class="list-group-item"><strong>Logradouro:</strong> Rua dos Coqueiros, 76</li>
                        <li class="list-group-item"><strong>Email:</strong> osvaldinho123@gmail.com</li>
                    </ul>
                    <p>
                        <a class="btn btn-primary btn-block" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4">Ver Mais</a>
                    </p>
                </div>
            </div>
        </div>
        <br>
    <br>
<?php
    // importando o rodapé padrão
    include(FOOTER_TEMPLATE);
?>