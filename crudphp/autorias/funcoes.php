<?php

    require_once('../config.php');
    require_once(DBAPI);

    /** Gerando a listagem de livros **/
    function index() {
        global $autores;
        global $livros;
        $autores = buscarRegistros('tab_autor');
        $livros = buscarRegistros('tab_livro');
    }
    function buscaAutor($id) {
        global $autor;
        $autor = buscarRegistros('tab_autor','id_autor',$id);
    }

    function buscaLivro($id) {
        global $livro;
        $livro = buscarRegistros('tab_livro','id_livro',$id);
    }

?>