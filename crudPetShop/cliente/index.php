<?php 
    require_once('funcoes.php');
    listarClientes();
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <header>
        <div class="row">
            <div class="col-sm-6">
                <h2>Clientes</h2>
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-info" href="insere.php"><i class="fa fa-plus"></i>Cadastrar Cliente</a>
                <a class="btn btn-secondary" href="index.php"><i class="fa fa-refresh"></i>Atualizar</a>
            </div>
        </div> 
    </header>
    <hr/>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>CPF</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>E-mail</th>
                <th>Celular</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($clientes) : ?>
                <?php foreach ($clientes as $cliente) : ?>
                    <tr>
                        <td><?php echo $cliente[1] ?></td>
                        <td><?php echo $cliente[2] ?></td>
                        <td><?php echo $cliente[3] ?></td>
                        <td><?php echo $cliente[4] ?></td>
                        <td><?php echo $cliente[5] ?></td>
                        <td><?php echo $cliente[6] ?></td>
                        <td><?php echo $cliente[7] ?></td>
                        <td class="actions">
                            <a href="altera.php?id=<?php echo $cliente[0]; ?>" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="9">Nenhum registro encontrado!</td>
                </tr>
            <?php endif; ?>           
        </tbody>    
    </table>
    <hr/>

    <?php include(FOOTER_TEMPLATE); ?>