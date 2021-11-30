<?php 
    // importações
    require_once('../config.php');
    require_once(DBAPI);

    /**
     * realizando a busca de todos os clientes
     */
    function listarClientes() {
        // criando uma variável global para receber os dados da consulta
        global $clientes;
        // executando a função para listar os clientes e armazenando o resultado na variável
        $clientes = buscarRegistros('cliente');
    }

    /**
     * recuperando os valores postados e 
     * encaminhando para o banco
     */
    function adicionarCliente() {
        // testando se estão sendo postados dados
        if (!empty($_POST['cliente'])) {
            // se o POST está sendo válido, salva os dados da tela na variável
            $cliente = $_POST['cliente'];
            // executando a função para executar a inserção na tabela do banco
            salvar('cliente',$cliente);
            // após a execução da função salvar, redireciona para a 'index'
            header('location: index.php');
        }
    }

    /** 
     * realizando a alteração de um registro carregado
     * a partir da tela de consulta
     */
    function alterarCliente() {
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

    /** 
    * realizando a exclusão de um registro
    * a partir da tela de consulta
    */
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