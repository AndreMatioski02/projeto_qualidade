<?php 
    require_once('funcoes.php');
    alterarAnimal();
    buscarCliente();
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <h1 class="text-center">Alterar informações do pet</h1>
    <hr/>
    <!-- iniciando o formulário -->
    <form action="altera.php?id=<?php echo $animal[0];?>" id="formAlteraEditora" method="post">
    <div class="container">
        <div class="form-row justify-content-center align-items-center">
            <div class="form-group col-md-4">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" id="inputNome" name="animal[nome_animal]" value="<?php echo $animal[1]; ?>">
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="form-group col-md-4">
                <label for="inputTipo">Seleção(tipo)</label>
                <input type="text" class="form-control" id="inputTipo" name="animal[tipo_animal]" value="<?php echo $animal[2]; ?>">
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="form-group col-md-4">
                <label for="inputRaca">Raça</label>
                <input type="text" class="form-control" id="inputRaca" name="animal[raca]" value="<?php echo $animal[3]; ?>">
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="form-group col-md-4">
                <label for="inputDataNascimento">Data nascimento</label>
                <input type="date" class="form-control" id="inputDataNascimento" name="animal[data_nascimento]" value="<?php echo $animal[4]; ?>">
            </div>
        </div>
        <div class="form-row justify-content-center align-items-center">
            <div class="form-group col-md-4">
                <label for="selectDono">Dono</label>
                <select type="text" class="form-control" name="animal[cliente_id]" id="selectDono">
                    <?php if($clientes) : ?>
                        <?php foreach($clientes as $cliente) : ?>
                            <option value="<?php echo $cliente[0]; ?>" <?php if($cliente[0] == $animal[5]) echo 'selected="select"' ; ?>> <?php echo $cliente[1]; ?> </option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option> Não foi possível obter os dados no banco! </option>
                    <?php endif; ?>
                </select>
            </div>
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