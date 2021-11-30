<?php
    mysqli_report(MYSQLI_REPORT_STRICT);
    global $lastInsertId;

    /** criando a função para abrir a conexão */
    function conectaMySQL() {
        try {
            // criando um objeto para receber a conexão
            $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            // definindo o charset para a conexão
            $conn->set_charset('utf8');
            // retornar a conexão (aberta/estabelecida)
            return $conn;
        }
        catch(Exception $e) {
            // retornar o código de erro
            echo $e->getMessage();
            return null;
        }
    }

    /** criando a função para encerrar a conexão com o banco de dados */
    function desconectaMysql($conn) {
        try {
            // fechando/encerrando a conexão com o banco
            mysqli_close($conn);
        }
        catch(Exception $e) {
            // mostrando o código de erro
            echo $e->getMessage();
        }
    }

    /** criando a função para pesquisar um registro em uma tabela baseando-se no ID 
     * ou retornar todos os registros de uma tabela específica **/
    function buscarRegistros($table = null, $chavePrimaria = null, $id = null) {
	    // realizando a conexão
        $database = conectaMysql();
        // inicializando uma variável vazia
	    $dados = null;
        /** 
         * o laço de try abaixo serve para listar um
         * registro específico
         */
        try {
            // verificando se foi informado um 'id'
            if ($id) {
                // montando a consulta SELECT
                $sql = "select * from $table where $chavePrimaria = $id";
                // atribuindo o resultado da consulta na variável
                $result = $database->query($sql);
                // testando o resultado da consulta
                if ($result->num_rows > 0) {
                    // se o número de linhas for maior que 0
                    // salva o resultado na variavel
                    $dados = $result->fetch_array(MYSQLI_NUM);
                }
            }
            // caso não tenha sido informado um 'id'
            else {
                // montando o SELECT para retornar todos os registros
                $sql = "select * from $table";
                // atribuindo o resultado da consulta na variável
                $result = $database->query($sql);
                // testando o resultado da consulta
                if ($result->num_rows > 0) {
                    // salva o resultado na variável
                    $dados = $result->fetch_all(MYSQLI_NUM);
                }
            }
        }
        // tratando possíveis erros da consulta
        catch(Exception $e) {
            // armazenando o tipo e a mensagem de erro
            // na sessão do usuário*
            $_SESSION['message'] = $e->getMessage();
            $_SESSION['type'] = 'danger';
        }
        // retornando o resultado
        return $dados;
        // fechando a conexão com o banco
        desconectaMysql($database);
    }

    /** criando a função para salvar registros no banco de dados **/
    function salvar($table=null, $data=null) {
        // abrir a conexão com o banco
        $database = conectaMysql();
        // declarar as variáveis
        $colunas = null;
        $valores = null;
        // varrer os dados que estão vindo da tela
        foreach ($data as $key => $valor) {
            // a variavel coluna vai receber as colunas da tabela
            $colunas .= trim($key, "'") . ",";
            // a variavel valores vai receber os dados
            $valores .= "'$valor',";
        }
        // removendo as vírgulas do final de cada variável
        $colunas = rtrim($colunas, ',');
        $valores = rtrim($valores, ',');
        // montando o comando INSERT
        $sql = "insert into $table($colunas) values ($valores);";
        // executando o INSERT
        try {
            // realizando a execução do comando
            $database->query($sql);
            // atribuindo o valor do ultimo id na variável
            $lastInsertId = $database->insert_id;
            // armazenando a mensagem de sucesso na sessão*
            $_SESSION['message'] = 'Registro cadastrado com sucesso!';
            $_SESSION['type'] = 'success';
        } 
        // se ocorrer erro no INSERT
        catch (Exception $e) {
            // armazenar a mensagem de erro na sessão
            $_SESSION['message'] = 'Não foi possível realizar a operação!';
            $_SESSION['type'] = 'danger';
        }
        // fechando a conexão com o banco
        desconectaMysql($database);
    }

    /** criando a função para editar registros no banco de dados **/
    function atualizar($table = null,$chavePrimaria = null, $id = null, $data = null) {
        // abrir a conexão com o banco
        $database = conectaMysql();
        // declarar as variáveis
        $items = null;
        // varrer os dados que estão vindo da tela
        foreach ($data as $key => $valor) {
            $items .= trim($key, "'") . "='$valor',";
        }
        // remove a ultima virgula
        $items = rtrim($items, ',');
        // montando o comando UPDATE
        $sql  = "update $table set $items where $chavePrimaria = $id";
        // executando o UPDATE
        try {
            // realizando a execução do comando
            $database->query($sql);
            // armazenando a mensagem de sucesso na sessão*
            $_SESSION['message'] = 'Registro atualizado com sucesso!';
            $_SESSION['type'] = 'success';
        }
        // se ocorrer erro no UPDATE
        catch (Exception $e) {
            // armazenar a mensagem de erro na sessão
            $_SESSION['message'] = 'Não foi possível realizar a operação!';
            $_SESSION['type'] = 'danger';
        } 
        desconectaMysql($database);
    }

    /** criando a função para editar registros no banco de dados **/
    function deletar($table = null,$chavePrimaria = null, $id = null) {
        // abrir a conexão com o banco
        $database = conectaMysql();
        // montando o comando DELETE
        $sql  = "delete from $table where $chavePrimaria = $id";
        // executando o DELETE
        try {
            $database->query($sql);
            // armazenando a mensagem de sucesso na sessão*
            $_SESSION['message'] = 'Registro apagado com sucesso!';
            $_SESSION['type'] = 'success';
        }
        // se ocorrer erro no DELETE
        catch (Exception $e) { 
            // armazenar a mensagem de erro na sessão
            $_SESSION['message'] = 'Não foi possível realizar a operação!';
            $_SESSION['type'] = 'danger';
        } 
        desconectaMysql($database);
    }



?>