<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Produtos extends ResourceController
{
    private $produtosModel;

    public function __construct()
    {
        $this->produtosModel = new \App\Models\ProdutosModel();
    }

    public function ListarTabela()
    {
        $data = $this->produtosModel->findAll();
        return $this->response->setJson($data);
    }

    public function Produto($id)
    {
        $data = $this->produtosModel->getProduto($id);
        return $this->response->setJson($data);
    }

    public function getRegistros($limit)
    {
        $data = $this->produtosModel->findAll($limit);
        return $this->response->setJson($data);
    }

    public function gravarProduto(){
        $this->produtosModel->save([
            'nome'  => $this->request->getPost('nome'),
            'valor' => $this->request->getPost('valor'),
            'descricao' => $this->request->getPost('descricao')              
        ]);
    }
}