<?php 
    require_once('funcoes.php');
    adicionarAgendamento();
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
    <h1 class="text-center">Agendamentos</h1>
    <hr/>
    <form action="insere.php" id="formAgendamentos" method="post">
        <div class="container">
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-4">
                    <label for="selectDono">Dono</label>
                    <select type="text" class="form-control" name="agendamentoservico[cliente_id]" id="selectFuncao">
                        <?php if($clientes) : ?>
                            <?php foreach($clientes as $cliente) : ?>
                                <option value="<?php echo $cliente[0]; ?>"> <?php echo $cliente[1]; ?> </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option> Não foi possível obter os dados no banco! </option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="selectAnimal">Animal</label>
                    <select type="text" class="form-control" name="agendamentoservico[animal_id]" id="selectAnimal">
                        <?php if($animais) : ?>
                            <?php foreach($animais as $animal) : ?>
                                <option value="<?php echo $animal[0]; ?>"> <?php echo $animal[1]; ?> </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option> Não foi possível obter os dados no banco! </option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-row justify-content-center align-items-center">
                <div class="form-group col-md-3">
                    <label for="selectServico">Serviço</label>
                    <select type="text" class="form-control" name="agendamentoservico[servicoclinica_id]" id="selectServico">
                        <?php if($servicos) : ?>
                            <?php foreach($servicos as $servico) : ?>
                                <option value="<?php echo $servico[0]; ?>"> <?php echo $servico[1]; ?> </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option> Não foi possível obter os dados no banco! </option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="selectPagamento">Forma de pagamento</label>
                    <select type="text" class="form-control" name="agendamentoservico[formapagamento_id]" id="selectPagamento">
                        <?php if($pagamentos) : ?>
                            <?php foreach($pagamentos as $pagamento) : ?>
                                <option value="<?php echo $pagamento[0]; ?>"> <?php echo $pagamento[1]; ?> </option>
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
                    <input type="date" class="form-control" id="inputDataServico" name="agendamentoservico[data_servico]">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputHoraServico">Hora do serviço</label>
                    <input type="time" class="form-control" id="inputHoraServico" name="agendamentoservico[hora_agendada]">
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