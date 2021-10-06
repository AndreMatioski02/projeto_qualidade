<?php 
    require_once('funcoes.php');
    listarAnimais();
    buscarCliente();
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <header>
        <div class="row">
            <div class="col-sm-6">
                <h2>Pets Registrados</h2>
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-info" href="insere.php"><i class="fa fa-plus"></i>Novo pet</a>
                <a class="btn btn-secondary" href="index.php"><i class="fa fa-refresh"></i>Atualizar</a>
            </div>
        </div> 
    </header>
    <hr/>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Seleção</th>
                <th>Raça</th>
                <th>Data nascimento</th>
                <th>Dono</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($animais) : ?>
                <?php foreach ($animais as $animal) : ?>
                    <tr>
                        <td><?php echo $animal[1] ?></td>
                        <td><?php echo $animal[2] ?></td>
                        <td><?php echo $animal[3] ?></td>
                        <td><?php echo $animal[4] ?></td>
                        <td>
                            <?php if($clientes) : ?>
                                    <?php foreach($clientes as $cliente) : ?> 
                                    <?php if($cliente[0] == $animal[5]) :  ?>
                                        <?php echo $cliente[1]; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="actions">
                            <a href="altera.php?id=<?php echo $animal[0]; ?>" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6">Nenhum registro encontrado!</td>
                </tr>
            <?php endif; ?>           
        </tbody>    
    </table>
    <hr/>

    <?php include(FOOTER_TEMPLATE); ?>