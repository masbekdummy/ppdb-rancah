<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'admin_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '40'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '210'
            ]
        ]);
        $this->forge->addKey('admin_id', true);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
