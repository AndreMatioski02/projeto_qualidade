<?php 
    require_once('funcoes.php');
    adicionarServico();
    buscarFuncionario();
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <h1 class="text-center">Cadastro de Serviços</h1>
    <hr/>
    <!-- iniciando o formulário -->
    <form action="insere.php" id="formCadastroServico" method="post">
        <div class="container">
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputNome">Nome do serviço</label>
                    <input type="text" class="form-control" id="inputNome" name="servicoclinica[nome_servico]">
                </div>
                <div class="form-group col-md-1">
                    <label for="inputPreco">Preço</label>
                    <input type="number" class="form-control" id="inputPreco" name="servicoclinica[preco]">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-5">
                    <label for="inputDescricao">Descrição</label>
                    <input type="text" class="form-control" id="inputDescricao" name="servicoclinica[descricao_servico]">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-5">
                    <label for="selectFuncao">Funcionario responsável</label>
                    <select type="text" class="form-control" name="servicoclinica[funcionario_id]" id="selectFuncao">
                        <?php if($funcionarios) : ?>
                            <?php foreach($funcionarios as $funcionario) : ?>
                                <option value="<?php echo $funcionario[0]; ?>"> <?php echo $funcionario[1]; ?> </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option> Não foi possível obter os dados no banco! </option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-12" style="text-align:right;">
                    <a href="index.php" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </form>
    <hr/>
    <br/>
<?php
    include(FOOTER_TEMPLATE);
?>