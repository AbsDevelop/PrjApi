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

    public function produtoModel($limit){
        $data = $this->produtoModel->getProdutos($limit);
        return $this->response->setJson($data);
    }

    public function inscreverProduto(){
        $this->produtosModel->save([
            'nome'  => $this->request->getPost('nome'),
            'valor' => $this->request->getPost('valor'),
            'descricao' => $this->request->getPost('descricao')              
        ]);
    }

    public function atualizar($id){
        $data = $this->request->getJson();
        $this->produtosModel->update($id, $data);
    }

    public function deletar($id){
        $this->produtosModel->delete($id);
    }

    public function Validtoken($id, $token){
        
    }
}