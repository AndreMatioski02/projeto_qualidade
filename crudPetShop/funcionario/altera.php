<?php 
    require_once('funcoes.php');
    alterarFuncionario();
    buscarFuncoes();
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <h1 class="text-center">Editar cadastro de funcionários</h1>
    <hr/>
    <form action="altera.php?id=<?php echo $funcionario[0];?>" id="formAlteraFuncionario" method="post">
        <div class="container">
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" name="funcionario[nome]" value="<?php echo $funcionario[1]; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCpf">CPF</label>
                    <input type="text" class="form-control" id="inputCpf" name="funcionario[cpf]" value="<?php echo $funcionario[3]; ?>">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-3">
                    <label for="inputEmail">E-mail</label>
                    <input type="text" class="form-control" id="inputEmail" name="funcionario[email]" value="<?php echo $funcionario[6]; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputDataNascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="inputDataNascimento" name="funcionario[data_nascimento]" value="<?php echo $funcionario[2]; ?>">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-3">
                    <label for="selectFuncao">Função</label>
                    <select type="text" class="form-control" name="funcionario[funcao_id]" id="selectFuncao">
                        <?php if($funcoes) : ?>
                            <?php foreach($funcoes as $funcao) : ?>
                                <option value="<?php echo $funcao[0]; ?>" <?php if($funcao[0] == $funcionario[8]) echo 'selected="select"' ; ?>> <?php echo $funcao[1]; ?> </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option> Não foi possível obter os dados no banco! </option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputTelefone">Telefone</label>
                    <input type="text" class="form-control" id="inputTelefone" name="funcionario[telefone]" value="<?php echo $funcionario[7]; ?>">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-3">
                    <label for="selectEstado">Estado</label>
                    <select type="text" class="form-control" name="funcionario[estado_funcionario]" id="selectEstado">
                        <option> Selecione o Estado</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="selectCidade">Cidade</label>
                    <select type="text" class="form-control" name="funcionario[cidade_funcionario]" id="selectCidade" disable> 
                        <option> Selecione a Cidade</option>
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