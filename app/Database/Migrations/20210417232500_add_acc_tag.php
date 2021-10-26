<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAccTag extends Migration
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
            ],
            'label'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 64,
            ],   
            'style'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
                'comment' => '{"color":"#005500","background":"#333333"}',
            ],   
        ]);

        $this->forge->addField('CONSTRAINT FOREIGN KEY (account_id) REFERENCES ven_account(id)');

        $this->forge->addKey('id', true);
        $this->forge->createTable('ven_acc_tag');
    }

    public function down()
    {
        $this->forge->dropTable('ven_acc_tag');
    }
}