<?php
    /** informando o nome do banco */
    define('DB_NAME','db_clinicapet');
    /** informando o nome do usuário */
    define('DB_USER','root');
    /** informando a senha do usuário */
    define('DB_PASSWORD','');
    /** informando o endereço do server */
    define('DB_HOST','localhost:3307');
    /** informando o caminho absoluto */
    if (!defined('ABSPATH'))
        define('ABSPATH',dirname(__FILE__) . '/');
    /** informando o caminho para a pasta do sistema */
    if (!defined('BASEURL'))
        define('BASEURL','/crudPetShop/');
    /** informando o caminho para o arquivo do banco */
    if (!defined('DBAPI'))
        define('DBAPI', ABSPATH . 'inc/database.php');
    /** informando o arquivo para a template do 'header */
    define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
    /** informando o arquivo para a template do 'footer' */
    define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
?>