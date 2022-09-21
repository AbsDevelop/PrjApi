<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Token extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'auto_increment' => true
            ],
            'id_produto' => [
                'type' => 'int', 
            ],
            'token' => [
                'type' => 'varchar',
                'constraint' => 4
            ] 
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_produto', 'produto', 'id');
        $this->forge->createTable('token');
    }

    public function down()
    {
        $this->forge->dropTable('token');
    }
}
