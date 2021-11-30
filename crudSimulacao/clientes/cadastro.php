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
    <hr/>
    <h1 class="text-center">Cadastrar-se</h1>
    <hr/>
    <!-- iniciando o formulário -->
    <form action="insere.php" id="formCadastroCliente" method="post">
        <div class="container">
            <div class="form-row justify-content-center align-items-center">
                <div class="container" style="width: 50%;">
                    <div class="form-row justify-content-center align-items-center">
                        <h5>Informações pessoais</h5>
                        <div class="form-group col-md-10">
                            <br>
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Ex.: João Elias">
                        </div>
                        <div class="form-group col-md-10">
                            <label for="inputCPF">CPF</label>
                            <input type="text" class="form-control" id="inputCPF" 
                                placeholder="Apenas números!" data-mask="000.000.000-00" data-mask-selectonfocus="true">
                        </div>
                        <div class="form-group col-md-10">
                            <label for="inputNasc">Data de nascimento</label>
                            <input type="date" class="form-control" id="inputNasc">
                        </div>
                    </div>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-10">
                            <label for="inputTelefone">Telefone</label>
                            <input 
                                type="text" class="form-control" id="inputTelefone" 
                                data-mask="(00)90000-0000" data-mask-selectonfocus="true" placeholder="Apenas números!">
                        </div>
                    </div>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-10">
                            <label for="selectEstado">Estado</label>
                            <select type="text" class="form-control" id="selectEstado">
                                <option>Selecione o estado</option>
                            </select>
                        </div>
                        <div class="form-group col-md-10">
                            <label for="selectCidade">Cidade</label>
                            <select type="text" class="form-control" id="selectCidade" disabled>
                                <option>Selecione a cidade</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-10">
                            <label for="inputLogradouro">Logradouro</label>
                            <input type="text" class="form-control" id="inputLogradouro" placeholder="Ex.: Rua Batata Doce, 182, Bairro Batatas">
                        </div>
                    </div>
                    <hr>
                    <h5>Informações de login</h5>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-10">
                            <br>
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="Ex: joão@gmail.com">
                        </div>
                    </div>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-10">
                            <label for="inputConfirmaEmail">Confirme seu email</label>
                            <input type="text" class="form-control" id="inputConfirmaEmail" placeholder="Ex: joão@gmail.com">
                        </div>
                    </div>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-10">
                            <label for="inputSenha">Senha</label>
                            <input type="password" class="form-control" id="inputSenha">
                        </div>
                    </div>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-10">
                            <label for="inputConfirmaSenha">Confirme sua senha</label>
                            <input type="password" class="form-control" id="inputConfirmaSenha">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/crudSimulacao/main/index.php" class="btn btn-secondary">Voltar</a>
                            <a href="/crudSimulacao/clientes/informacoesSucesso.php" class="btn btn-primary" role="button">Cadastrar-se</a>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </form>
    <!-- finalizando o formulário -->
    <hr/>
    <br/>
<?php
    // importando o rodapé padrão
    include(FOOTER_TEMPLATE);
?>