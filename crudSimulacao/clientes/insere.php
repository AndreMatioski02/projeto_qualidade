<?php 
    // realizando as importações
    require_once('../funcoes.php');
    // chamando a função para inserir os dados no banco
?>

<?php
    // importando o cabeçalho padrão
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr>
    <!-- iniciando o formulário -->
    <form action="insere.php" id="formCadastroCliente" method="post">
        <div class="container">
            <div class="form-row justify-content-center align-items-center">
                <div class="container" style="width: 50%;">
                    <h1 class="text-center">Cadastre-se</h1>
                    <br>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-7">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="Ex: joão@gmail.com">
                        </div>
                    </div>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="col-md-12">
                            <a role="button" href="/crudSimulacao/clientes/cadastro.php" class="btn btn-primary" style="width: 57.5%">Continuar</a>
                        </div>
                    </div>
                </div>

                <div class="container" style="width: 50%;">
                    <h1 class="text-center">Já sou cliente</h1>
                    <br>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-7">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="Ex: joão@gmail.com">
                        </div>
                        <div class="form-group col-md-7">
                            <label for="inputEmail">Senha</label>
                            <input type="password" class="form-control" id="inputSenha">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                            Mantenha-me conectado
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="col-md-12">
                            <a role="button" href="/crudSimulacao/requisicoes/minhasReq.php" class="btn btn-primary" style="width: 57.5%">Continuar</a>
                        </div>
                    </div>
                    <div>
                        <a href="/crudSimulacao/clientes/esqueciSenha.php">
                            <span class="text-muted">Esqueci minha senha</span>
                        </a>
                    </div>
                </div>

                <div class="container">
                    <div class="form-row justify-content-center align-items-center"> 
                        <br><br><br>
                        <h5>Entre usando sua rede social!</h5>
                        <a href="/crudSimulacao/main/index.php"> 
                            <figure>
                                <img src="/crudSimulacao/imagens/facebook.png" alt="Logo" width="30vw" height="30vh" style="margin-left: 30px;">
                            </figure>
                        </a>
                        <a href="/crudSimulacao/main/index.php"> 
                            <figure>
                                <img src="/crudSimulacao/imagens/google.png" alt="Logo" width="30vw" height="30vh" style="margin-left: 30px;">
                            </figure>
                        </a>
                    </div>
                </div>
                <hr>
            </div>                
        </div>
    </form>
    <!-- finalizando o formulário -->
<?php
    // importando o rodapé padrão
    include(FOOTER_TEMPLATE);
?>