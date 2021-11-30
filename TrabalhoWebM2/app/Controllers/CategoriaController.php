<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Controllers\BaseController;

class CategoriaController extends BaseController
{
    private $CategoriaModel;

    public function __construct(){
        $this->CategoriaModel = new CategoriaModel();
    }

    public function index()
    {
        return view('categorias/index', [
            'categorias' => $this->CategoriaModel->findAll()
        ]);
    }

    public function create()
    {
        return view ('categorias/create');
    }

    public function store()
    {
        if ($this->CategoriaModel->save($this->request->getPost())) {
            return view('messages', [
                'message' => 'Categoria salvo com sucesso!'
            ]);
        }else {
            echo "Erro!";
        }
    }

    public function edit($id)
    {
        return view('categorias/edit', [
            'categorias' => $this->CategoriaModel->find($id)
        ]);
    }

    public function delete($id)
    {
        if($this->CategoriaModel->delete($id)){
            return view('messages', [
                'message' => 'Excluído com sucesso!'
            ]);
        } else {
            echo "Erro!";
        }
    }
}

