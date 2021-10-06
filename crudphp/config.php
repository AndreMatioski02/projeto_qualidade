<?php
    /** informando o nome do banco de dados */
    define('DB_NAME', 'db_biblioteca_2021_1');
    /** informando o nome do usuário para o banco de dados */
    define('DB_USER', 'root');
    /** informando a senha do usuário para o acesso do banco de dados */
    define('DB_PASSWORD','');
    /** informando o endereço do host do banco de dados */
    define('DB_HOST','localhost:3307');
    /** informando o caminho absoluto para a pasta do sistema */
    if (!defined('ABSPATH'))
        define('ABSPATH', dirname(__FILE__) . '/');
    /** informando o caminho no servidor para a pasta do sistema web */
    if (!defined('BASEURL'))
        define('BASEURL','/crudphp/');
    /** informando o caminho para o arquivo do banco de dados */
    if (!defined('DBAPI'))
        define('DBAPI', ABSPATH . 'inc/database.php');
    /** informando o arquivo que será utilizado para a template do 'header' da página */
    define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
    /** informando o arquivo que será utilizado para a template do 'footer' da página */
    define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
?>