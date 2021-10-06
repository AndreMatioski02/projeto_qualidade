<?php 
    require_once('funcoes.php');
    listarAgendamentos();
    buscarFormaPagamento();
    buscarServicos();
    buscarCliente();
    buscarAnimal();
?>

<?php
    include(HEADER_TEMPLATE);
?>
    <br/>
    <hr/>
    <header>
        <div class="row">
            <div class="col-sm-6">
                <h2>Agendamentos</h2>
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-info" href="insere.php"><i class="fa fa-plus"></i>Agendar data</a>
            </div>
        </div> 
    </header>
    <hr/>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Dia</th>
                <th>Horário</th>
                <th>Serviço</th>
                <th>Cliente</th>
                <th>Animal</th>
                <th>Forma de pagamento</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($agendamentos) : ?>
                <?php foreach ($agendamentos as $agendamento) : ?>
                    <tr>
                        <td><?php echo $agendamento[1] ?></td>
                        <td><?php echo $agendamento[2] ?></td>
                        <td>
                            <?php if($servicos) : ?>
                                    <?php foreach($servicos as $servico) : ?>
                                    <?php if($servico[0] == $agendamento[3]) :  ?>
                                        <?php echo $servico[1]; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($clientes) : ?>
                                    <?php foreach($clientes as $cliente) : ?>
                                    <?php if($cliente[0] == $agendamento[4]) :  ?>
                                        <?php echo $cliente[1]; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($animais) : ?>
                                    <?php foreach($animais as $animal) : ?>
                                    <?php if($animal[0] == $agendamento[5]) :  ?>
                                        <?php echo $animal[1]; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>                        
                        <td>
                            <?php if($pagamentos) : ?>
                                    <?php foreach($pagamentos as $pagamento) : ?>
                                    <?php if($pagamento[0] == $agendamento[6]) :  ?>
                                        <?php echo $pagamento[1]; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </td>
                        <td class="actions">
                            <a href="altera.php?id=<?php echo $agendamento[0]; ?>" class="btn btn-sm btn-warning">Editar</a>
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