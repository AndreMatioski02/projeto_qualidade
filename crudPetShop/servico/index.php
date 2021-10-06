<?php 
    require_once('funcoes.php');
    listarServicos();
    buscarFuncionario()
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <header>
        <div class="row">
            <div class="col-sm-6">
                <h2>Consulta de serviços disponíveis</h2>
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-info" href="insere.php"><i class="fa fa-plus"></i>Novo serviço</a>
                <a class="btn btn-secondary" href="index.php"><i class="fa fa-refresh"></i>Atualizar</a>
            </div>
        </div> 
    </header>
    <hr/>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Serviço</th>
                <th>Descriçao</th>
                <th>Valor</th>
                <th>Funcionario</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($servicos) : ?>
                <?php foreach ($servicos as $servico) : ?>
                    <tr>
                        <td><?php echo $servico[1] ?></td>
                        <td><?php echo $servico[2] ?></td>
                        <td><?php echo $servico[3] ?></td>
                        <td>
                            <?php if($funcionarios) : ?>
                                    <?php foreach($funcionarios as $funcionario) : ?> 
                                    <?php if($funcionario[0] == $servico[4]) :  ?>
                                        <?php echo $funcionario[1]; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="actions">
                            <a href="altera.php?id=<?php echo $servico[0]; ?>" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">Nenhum registro encontrado!</td>
                </tr>
            <?php endif; ?>           
        </tbody>    
    </table>
    <hr/>

    <?php include(FOOTER_TEMPLATE); ?>