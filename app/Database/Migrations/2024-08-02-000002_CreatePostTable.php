<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idpost' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'TEXT',
            ],
            'content' => [
                'type' => 'TEXT',
            ],
            'date' => [
                'type' => 'DATETIME',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
            ],
        ]);
        $this->forge->addKey('idpost', true);
        $this->forge->addForeignKey('username', 'account', 'username', 'NO ACTION', 'NO ACTION');
        $this->forge->createTable('post');
    }

    public function down()
    {
        $this->forge->dropTable('post');
    }
}
