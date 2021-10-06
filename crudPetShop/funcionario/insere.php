<?php 
    require_once('funcoes.php');
    adicionarFuncionario();
    buscarFuncoes();
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <h1 class="text-center">Cadastro Funcionarios</h1>
    <hr/>
    <form action="insere.php" id="formCadastroFuncionario" method="post">
        <div class="container">
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" name="funcionario[nome]">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCpf">CPF</label>
                    <input type="text" class="form-control" id="inputCpf" name="funcionario[cpf]">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-3">
                    <label for="inputDataNascimento">Data nascimento</label>
                    <input type="date" class="form-control" id="inputDataNascimento" name="funcionario[data_nascimento]">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" id="inputEmail" name="funcionario[email]">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-3">
                    <label for="selectFuncao">Função</label>
                    <select type="text" class="form-control" name="funcionario[funcao_id]" id="selectFuncao">
                        <?php if($funcoes) : ?>
                            <?php foreach($funcoes as $funcao) : ?>
                                <option value="<?php echo $funcao[0]; ?>"> <?php echo $funcao[1]; ?> </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option> Não foi possível obter os dados no banco! </option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputTelefone">Telefone</label>
                    <input type="text" class="form-control" id="inputTelefone" name="funcionario[telefone]">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-sm-3">
                    <label for="selectEstado">Estado</label>
                    <select type="text" class="form-control" name="funcionario[estado_funcionario]" id="selectEstado">
                    <option value=""> Selecione o Estado</option>
                    </select>
                </div>
                <div class="form-group col-sm-3">
                    <label for="selectCidade">Cidade</label>
                    <select type="text" class="form-control" name="funcionario[cidade_funcionario]" id="selectCidade" disable> 
                    <option value=""> Selecione a Cidade</option>
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