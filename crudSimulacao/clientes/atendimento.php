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
    <h1 class="text-center">Seja bem-vindo à área de suporte!</h1>
    <hr/>
    <!-- iniciando o formulário -->
    <form action="insere.php" id="formCadastroCliente" method="post">
        <div class="container">
            <div class="form-row justify-content-center align-items-center">
                <div class="container">
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-6">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Ex.: João Elias">
                        </div>
                    </div>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-4">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="Ex: joao@gmail.com" data-mask="000.000.000-00" data-mask-selectonfocus="true">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputTelefone">Telefone</label>
                            <input 
                                type="text" class="form-control" id="inputTelefone" name="cliente[telefone]" 
                                data-mask="(00)90000-0000" data-mask-selectonfocus="true" placeholder="Apenas números!">
                        </div>
                    </div>
                    <div class="form-row justify-content-center align-items-center">
                        <div class="form-group col-md-6">
                            <label>Mensagem</label>
                            <textarea class="form-control" rows="5" placeholder="Digite aqui sua mensagem"></textarea>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/crudSimulacao/main/index.php" class="btn btn-secondary">Voltar</a>
                            <a href="/crudSimulacao/clientes/mensagemSucesso" type="submit" class="btn btn-primary">Enviar</a>
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