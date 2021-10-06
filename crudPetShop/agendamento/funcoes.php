<?php 
    require_once('../config.php');
    require_once(DBAPI);

    function listarAgendamentos() {
        global $agendamentos;
        $agendamentos = buscarRegistros('agendamentoservico');
    }

    function buscarServicos(){
        global $servicos;
        $servicos = buscarRegistros('servicoclinica');
    }

    function buscarCliente(){
        global $clientes;
        $clientes = buscarRegistros('cliente');
    }

    function buscarAnimal(){
        global $animais;
        $animais = buscarRegistros('animal');
    }

    function buscarFormaPagamento(){
        global $pagamentos;
        $pagamentos = buscarRegistros('formapagamento');
    }

    function adicionarAgendamento() {
        if (!empty($_POST['agendamentoservico'])) {
            $agendamento = $_POST['agendamentoservico'];
            salvar('agendamentoservico',$agendamento);
            header('location: index.php');
        }
    }

    function alterarAgendamento() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['agendamentoservico'])) {
                $agendamento = $_POST['agendamentoservico'];        
                atualizar('agendamentoservico', 'id', $id, $agendamento);
                header('location: index.php');
            }
            else {
                global $agendamento;
                $agendamento = buscarRegistros('agendamentoservico', 'id', $id);
            } 
        } 
        else {
            header('location: index.php');
        }
    }

    function excluirAgendamento() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            deletar('agendamentoservico', 'id', $id);
            header('location: index.php');
        } 
        else {
            header('location: index.php');
        }
    }
?>