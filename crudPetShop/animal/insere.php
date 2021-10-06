<?php 
    require_once('funcoes.php');
    adicionarAnimal();
    buscarCliente();
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <h1 class="text-center">Cadastro de Pets</h1>
    <hr/>
    <form action="insere.php" id="formCadastroEditora" method="post">
        <div class="container">
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" name="animal[nome_animal]">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputTipo">Seleção(tipo)</label>
                    <input type="text" class="form-control" id="inputTipo" name="animal[tipo_animal]">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputRaca">Raça</label>
                    <input type="text" class="form-control" id="inputRaca" name="animal[raca]">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="inputDataNascimento">Data nascimento</label>
                    <input type="date" class="form-control" id="inputDataNascimento" name="animal[data_nascimento]">
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="selectDono">Dono</label>
                    <select type="text" class="form-control" name="animal[cliente_id]" id="selectFuncao">
                        <?php if($clientes) : ?>
                            <?php foreach($clientes as $cliente) : ?>
                                <option value="<?php echo $cliente[0]; ?>"> <?php echo $cliente[1]; ?> </option>
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