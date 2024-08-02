<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAccountTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
            ],
        ]);
        $this->forge->addKey('username', true);
        $this->forge->createTable('account');
    }

    public function down()
    {
        $this->forge->dropTable('account');
    }
}
