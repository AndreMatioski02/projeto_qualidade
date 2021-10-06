<?php 
    require_once('funcoes.php');
    alterarAgendamento();
    buscarServicos();
    buscarCliente();
    buscarAnimal();
    buscarFormaPagamento();
?>

<?php
    include(HEADER_TEMPLATE);
?>

    <br/>
    <hr/>
    <h1 class="text-center">Reagendamento</h1>
    <hr/>
    <!-- iniciando o formulário -->
    <form action="altera.php?id=<?php echo $agendamento[0];?>" id="formAlteraAgendamento" method="post">
        <div class="container">
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="selectDono">Dono</label>
                    <select type="text" class="form-control" name="agendamentoservico[cliente_id]" id="selectDono">
                        <?php if($clientes) : ?>
                            <?php foreach($clientes as $cliente) : ?>
                                <option value="<?php echo $cliente[0]; ?>" <?php if($cliente[0] == $agendamento[4]) echo 'selected="select"' ; ?>> <?php echo $cliente[1]; ?> </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option> Não foi possível obter os dados no banco! </option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="selectDono">Animal</label>
                    <select type="text" class="form-control" name="agendamentoservico[animal_id]" id="selectDono">
                        <?php if($animais) : ?>
                            <?php foreach($animais as $animal) : ?>
                                <option value="<?php echo $animal[0]; ?>" <?php if($animal[0] == $agendamento[5]) echo 'selected="select"' ; ?>> <?php echo $animal[1]; ?> </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option> Não foi possível obter os dados no banco! </option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="selectServico">Serviço</label>
                    <select type="text" class="form-control" name="agendamentoservico[servicoclinica_id]" id="selectServico">
                        <?php if($servicos) : ?>
                            <?php foreach($servicos as $servico) : ?>
                                <option value="<?php echo $servico[0]; ?>" <?php if($servico[0] == $agendamento[3]) echo 'selected="select"' ; ?>> <?php echo $servico[1]; ?> </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option> Não foi possível obter os dados no banco! </option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="selectPagamento">Forma de Pagamento</label>
                    <select type="text" class="form-control" name="agendamentoservico[formapagamento_id]" id="selectPagamento">
                        <?php if($pagamentos) : ?>
                            <?php foreach($pagamentos as $pagamento) : ?>
                                <option value="<?php echo $pagamento[0]; ?>" <?php if($pagamento[0] == $agendamento[5]) echo 'selected="select"' ; ?>> <?php echo $pagamento[1]; ?> </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option> Não foi possível obter os dados no banco! </option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
                <div class="form-row justify-content-center align-items-center">
                    <div class="form-group col-md-3">
                        <label for="inputDataServico">Data do serviço</label>
                        <input type="date" class="form-control" id="inputDataServico" name="agendamentoservico[data_servico]" value="<?php echo $agendamento[1]; ?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputHoraServico">Hora do serviço</label>
                        <input type="time" class="form-control" id="inputHoraServico" name="agendamentoservico[hora_agendada]" value="<?php echo $agendamento[2]; ?>">
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