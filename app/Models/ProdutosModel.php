<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
    protected $table = 'produtos';
    protected $primaryKey  = 'id';
    protected $allowedFields = ['nome', 'valor', 'descricao'];

    public function getProduto($id){
        return $this->asArray()->where(["id"=>$id])->first();
    }

    public function getRegistros($limit){
        //return $this->asArray()->findAll($limit);
        
        $query = $this->db->query("SELECT * FROM `produtos` limit".$limit);
        $result = $query->getResultArray();
        return $result;
    }

}