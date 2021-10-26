<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAccGroup extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'account_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null' => TRUE,
            ],
            'parent_id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null' => TRUE,
            ],
            'name'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
            ],
            'code'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 32,
            ],
            'affects_gross'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'default' => 0,
            ],
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (account_id) REFERENCES ven_account(id)');

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_acc_groups');
    }

    public function down()
    {
        $this->forge->dropTable('ven_acc_groups');
    }
}