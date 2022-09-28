<?php

namespace App\Models;

use CodeIgniter\Model;

class TokenModel extends Model
{
    protected $table = 'token';
    protected $primaryKey  = 'id';
    protected $allowedFields = ['id', 'id_produto', 'token'];

    public function getToken($id){
        return $this->asArray()->where(["id"=>$id])->first();
    }

    public function ValidToken($id, $token){
        if ($id == $token) {
            return(Produto($id));
        }else {
            return('Error');
        }
    }

}