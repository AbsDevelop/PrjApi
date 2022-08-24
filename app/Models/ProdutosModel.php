<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
    protected $table = 'produtos';
    protected $primaryKey  = 'id';
    protected $allowedFields = ['nome', 'valor', 'descricao'];

    public function getProdutos(){
        return $this->findAll();
    }

    public function getRegistros($id){
        //$query = $db->query("SELECT * FROM `produtos` limit".$limit);
        //return $query->getResultArray();

        return $this->asArray()->findAll($limit);
    }

}