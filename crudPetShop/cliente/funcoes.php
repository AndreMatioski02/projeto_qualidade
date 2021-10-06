<?php 
    require_once('../config.php');
    require_once(DBAPI);

    function listarClientes() {
        global $clientes;
        $clientes = buscarRegistros('cliente');
    }

    function adicionarClientes() {
        if (!empty($_POST['cliente'])) {
            $cliente = $_POST['cliente'];
            salvar('cliente',$cliente);
            header('location: index.php');
        }
    }

    function alterarClientes() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['cliente'])) {
                $cliente = $_POST['cliente'];        
                atualizar('cliente', 'id', $id, $cliente);
                header('location: index.php');
            }
            else {
                global $cliente;
                $cliente = buscarRegistros('cliente', 'id', $id);
            } 
        } 
        else {
            header('location: index.php');
        }
    }

    function excluirCliente() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            deletar('cliente', 'id', $id);
            header('location: index.php');
        } 
        else {
            header('location: index.php');
        }
    }
?>