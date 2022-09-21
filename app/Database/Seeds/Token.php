<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Token extends Seeder
{
    public function run()
    {
        $produtosModel = new \App\Models\ProdutosModel();
        $produtosArray = $produtosModel->findAll();
        for($x = 0; $x < count($produtosArray); $x++){
            $data = [
                'id_produto'    =>  $produtosArray[$x]['id'],
                'token'         =>  md5($produtosArray[$x]['id'])
            ];
            $this->db->table('token')->insert($data);
        }
    }
}