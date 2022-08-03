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

    public function Listar()
    {
        $data = $this->produtosModel->findALL();
        return $this->response->setJson($data);
    }

    public function Produto($id)
    {
        $data = $this->produtosModel->getProduto($id);
        return $this->response->setJson($data);
    }

}