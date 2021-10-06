<?php 
    require_once('../config.php');
    require_once(DBAPI);

    function listarAnimais() {
        global $animais;
        $animais = buscarRegistros('animal');
    }

    function buscarCliente(){
        global $clientes;
        $clientes = buscarRegistros('cliente');
    }

    function adicionarAnimal() {
        if (!empty($_POST['animal'])) {
            $animal = $_POST['animal'];
            salvar('animal',$animal);
            header('location: index.php');
        }
    }

    function alterarAnimal() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['animal'])) {
                $animal = $_POST['animal'];        
                atualizar('animal', 'id', $id, $animal);
                header('location: index.php');
            }
            else {
                global $animal;
                $animal = buscarRegistros('animal', 'id', $id);
            } 
        } 
        else {
            header('location: index.php');
        }
    }

    function excluirAnimal() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            deletar('animal', 'id', $id);
            header('location: index.php');
        } 
        else {
            header('location: index.php');
        }
    }
?>