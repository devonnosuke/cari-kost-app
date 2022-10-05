<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_user' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,

            ],
            'username' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,

            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,

            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => 99,

            ],
            'salt' => [
                'type'           => 'VARCHAR',
                'constraint'     => 225,

            ],

        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
