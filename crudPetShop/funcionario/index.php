<?php 
    require_once('funcoes.php');
    listarFuncionario();
    buscarFuncoes();
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <header>
        <div class="row">
            <div class="col-sm-6">
                <h2>Funcionários</h2>
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-info" href="insere.php"><i class="fa fa-plus"></i>Novo funcionário</a>
                <a class="btn btn-secondary" href="index.php"><i class="fa fa-refresh"></i>Atualizar</a>
            </div>
        </div> 
    </header>
    <hr/>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data nascimento</th>
                <th>CPF</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Função</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($funcionarios) : ?>
                <?php foreach ($funcionarios as $funcionario) : ?>
                    <tr>
                        <td><?php echo $funcionario[1] ?></td> 
                        <td><?php echo $funcionario[2] ?></td> 
                        <td><?php echo $funcionario[3] ?></td> 
                        <td><?php echo $funcionario[4] ?></td> 
                        <td><?php echo $funcionario[5] ?></td> 
                        <td><?php echo $funcionario[6] ?></td> 
                        <td><?php echo $funcionario[7] ?></td> 
                        <td>
                            <?php if($funcoes) : ?>
                                    <?php foreach($funcoes as $funcao) : ?>
                                    <?php if($funcao[0] == $funcionario[8]) :  ?>
                                        <?php echo $funcao[1]; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="actions">
                            <a href="altera.php?id=<?php echo $funcionario[0]; ?>" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="8">Nenhum registro encontrado!</td>
                </tr>
            <?php endif; ?>           
        </tbody>    
    </table>
    <hr/>

    <?php include(FOOTER_TEMPLATE); ?>