<?php
    require_once('../config.php');
    require_once(DBAPI);

    function listarFuncionario(){
        global $funcionarios;
        $funcionarios = buscarRegistros('funcionario');
    }

    function buscarFuncoes(){
        global $funcoes;
        $funcoes = buscarRegistros('funcao');
    }

    function adicionarFuncionario(){
        if (!empty($_POST['funcionario'])){
            $funcionario = $_POST['funcionario'];
            salvar('funcionario',$funcionario);
            header('location: index.php');
        }
    }

    function alterarFuncionario(){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            if(isset($_POST['funcionario'])){
                $funcionario = $_POST['funcionario'];
                atualizar('funcionario', 'id', $id, $funcionario);
                header('location: index.php');
            }
            else{
                global $funcionario;
                $funcionario = buscarRegistros('funcionario', 'id', $id);
            }
        }
        else{
            header('location: index.php');
        }
    }

    function excluirFuncionario(){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            deletar('funcionario', 'id', $id);
            header('location: index.php');
        }
        else{
            header('location: index.php');
        }
    }
?>   