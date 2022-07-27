<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {

        $nome = ['Computador Core i5','Ipad Pro 12','Notepad Realme X','All in One Samsung','Headphone JBL'];
        $valor = ['6000,00','2000,00','2700,00','5400,00','899,99'];
        $descricao = ['Liberado. Novo.','Liberado. Novo.','Liberado. Seminovo','Em avaliação. Novo.','Em avaliação. Em manutenção.'];

        for($x = 0; $x < 5; $x++){
            $data = [
                'nome'      =>  $nome[$x],
                'valor'     =>  $valor[$x],
                'descricao' =>  $descricao[$x],
            ];
            $this->db->table('produtos')->insert($data);
        }
    }
}