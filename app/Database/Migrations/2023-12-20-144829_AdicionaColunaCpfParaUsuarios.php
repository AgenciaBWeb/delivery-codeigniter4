<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdicionaColunaCpfParaUsuarios extends Migration
{
    public function up()
    {
        $field = [
            'telefone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
        ];
        
        $this->forge->addColumn('usuarios', $field);
    }

    public function down()
    {
        $this->forge->dropTable('usuarios', 'cpf');
    }
}
