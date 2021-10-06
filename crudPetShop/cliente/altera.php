<?php 
    require_once('funcoes.php');
    alterarClientes();
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <h1 class="text-center">Alterar Usuário</h1>
    <hr/>
    <form action="altera.php?id=<?php echo $cliente[0];?>" id="formAlteraUsuario" method="post">
    <div class="container">
        <div class="form-row justify-content-center align-items-center">
            <div class="form-group col-md-5">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" id="inputNome" name="cliente[nome]" value="<?php echo $cliente[1]; ?>">
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="form-group col-md-3">
                <label for="inputDataNascimento">Data de Nascimento</label>
                <input type="date" class="form-control" id="inputDataNascimento" name="cliente[data_nascimento]" value="<?php echo $cliente[2]; ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="inputCpf">CPF</label>
                <input type="text" class="form-control" id="inputCpf" name="cliente[cpf]" value="<?php echo $cliente[3]; ?>">
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="form-group col-md-4">
                <label for="inputEmail">E-mail</label>
                <input type="text" class="form-control" id="inputEmail" name="cliente[email]" value="<?php echo $cliente[6]; ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="inputTelefone">Telefone</label>
                <input type="text" class="form-control" id="inputTelefone" name="cliente[telefone]" value="<?php echo $cliente[7]; ?>">
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="form-group col-md-3">
                <label for="selectEstado">Estado</label>
                <select type="text" class="form-control" name="cliente[estado_cliente]" id="selectEstado">
                <option value=""> Selecione o Estado</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="selectCidade">Cidade</label>
                <select type="text" class="form-control" name="cliente[cidade_cliente]" id="selectCidade" disable> 
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