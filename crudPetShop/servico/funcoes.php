<?php 
    require_once('../config.php');
    require_once(DBAPI);

    function listarServicos() {
        global $servicos;
        $servicos = buscarRegistros('servicoclinica');
    }

    function buscarFuncionario(){
        global $funcionarios;
        $funcionarios = buscarRegistros('funcionario');
    }

    function adicionarServico() {
        if (!empty($_POST['servicoclinica'])) {
            $servico = $_POST['servicoclinica'];
            salvar('servicoclinica',$servico);
            header('location: index.php');
        }
    }

    function alterarServico() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['servicoclinica'])) {
                $servico = $_POST['servicoclinica'];        
                atualizar('servicoclinica', 'id', $id, $servico);
                header('location: index.php');
            }
            else {
                global $servico;
                $servico = buscarRegistros('servicoclinica', 'id', $id);
            } 
        } 
        else {
            header('location: index.php');
        }
    }

    function excluirServico() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            deletar('servicoclinica', 'id', $id);
            header('location: index.php');
        } 
        else {
            header('location: index.php');
        }
    }
?>