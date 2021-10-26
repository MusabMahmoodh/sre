<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAccEntryType extends Migration
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
            'name'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
            ],
            'code'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 32,
            ],
            'description'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 256,
            ],
            'base_type'          => [
                'type'           => 'INT',
                'constraint'     => 1,
                'default' => 0,
                'comment' => '0-false,1-true',
            ],            
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (account_id) REFERENCES ven_account(id)');

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_acc_entry_type');
    }

    public function down()
    {
        $this->forge->dropTable('ven_acc_entry_type');
    }
}